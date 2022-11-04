<?php

namespace App\Http\Controllers;

use App\Helpers\MongoModel;
use App\Instruction\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // private MongoModel $tasks;
	// public function __construct()
	// {
	// 	$this->tasks = new MongoModel('users');
	// }

    private UserService $userService;
	public function __construct() {
		$this->userService = new UserService();
	}

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'=>'required|string|min:5',
			'email'=>'required|string',
            'password'=>'required|string|min:5'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = [
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => bcrypt($request->post('password'))
        ];
        
        $checkEmail = $this->userService->findEmail($credentials['email']);
        if ($checkEmail != null) {
			return response()->json([
                'success' => false,
                'message' => 'Email telah didaftarkan',
            ],409);
		}

        $id = $this->userService->addUser($credentials);
		$user = $this->userService->find($id['_id']);
        return response()->json([
            'id' => $user['name'],
            'email' => $user['email']
        ],200);

    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->only('email', 'password');

        if(!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password Anda salah'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'user'    => auth()->guard('api')->user(),    
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ], 200);
    }

    public function logout()
    {
        Auth::logout();

        return response()->json([
            'success' => true,
            'message' => 'Log Out Success',
        ], 200);
    }

    public function refresh()
    {
        return response()->json([
            'success' => true,
            'access_token' => Auth::refresh(),
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Instruction\Services\InternalService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InternalController extends Controller
{
    private InternalService $internalService;
	
    public function __construct() {
		$this->internalService = new InternalService();
	}
    
    /**
	 * Untuk membuat internal only
	 */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'attachment'=>'mimes:pdf,doc,docx',
            'instruction_id' => 'required',
            'desc' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $id = $this->internalService->add($credentials);
        $data = $this->internalService->find($id['_id']);
        return response()->json($data,200);

    }
    
    // untuk edit internal
    public function edit(Request $request){
        // return $request;
        $validator = Validator::make($request->all(), [
            'attachment'=>'mimes:pdf,doc,docx',
            'id' => 'required',
            'desc' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();
        $internal = $this->internalService->editInternal($credentials);

        return response()->json($internal);

    }
}

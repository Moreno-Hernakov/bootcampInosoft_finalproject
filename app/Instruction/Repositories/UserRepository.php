<?php

namespace App\Instruction\Repositories;

use App\Helpers\MongoModel;
use App\Models\User;

class UserRepository
{
    // private MongoModel $users;
	// public function __construct()
	// {
	// 	$this->users = new MongoModel('users');
	// }

	/**
	 * Untuk mendapatkan data user berdasarkan id
	 *  */
	public function find(string $id)
	{

		$user = User::find($id);
		return $user;
	}

	/**
	 * Untuk mengecek email user
	 *  */
	public function findEmail(string $email)
	{

		$user = User::where('email', $email)->first();
		return $user;
	}

	/**
	 * Untuk membuat user
	 */
	public function create(array $data)
	{
		$dataSaved = [
			'name'=>$data['name'],
			'email'=>$data['email'],
			'password'=>$data['password'],
			'created_at'=>time()
		];

		$id = User::create($dataSaved);	
        $id->save();
		
		return $id;
	}

	/**
	 * Untuk generate token auth
	 *  */
    public function generateToken(array $user)
    {
        $token = auth() -> attempt($user);
        return $token;
    }
}
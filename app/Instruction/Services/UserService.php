<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\UserRepository;

class UserService
{
    private UserRepository $userRepository;

	public function __construct() {
		$this->userRepository = new UserRepository();
	}
	
	/**
	 * NOTE: menambahkan user
	 */
	public function addUser(array $data)
	{
		$taskId = $this->userRepository->create($data);
		return $taskId;
	}

	/**
	 * NOTE: UNTUK mendapatkan data user 
	 */
	public function find(string $user)
	{
		$task = $this->userRepository->find($user);
		return $task;
	}

	/**
	 * NOTE: UNTUK mendapatkan data user berdasarkan email
	 */
	public function findEmail(string $email)
	{
		$user = $this->userRepository->findEmail($email);
		return $user;
	}

	/**
	 * Untuk generate token auth
	 *  */
    public function generateToken(array $user)
    {
        $token = $this->userRepository->generateToken($user);
        return $token;
    }

	
}
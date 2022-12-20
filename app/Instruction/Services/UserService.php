<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\UserRepository;

class UserService
{
    // private UserRepository $userRepository;
    private  $userRepository;

	public function __construct() {
		$this->userRepository = new UserRepository();
	}

	/**
	 * NOTE: menambahkan user
	 */
	public function addUser(array $data)
	{
		$user = $this->userRepository->create($data);
		return $user;
	}

	/**
	 * NOTE: UNTUK mendapatkan data user
	 */
	public function find(string $user)
	{
		$id = $this->userRepository->find($user);
		return $id;
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

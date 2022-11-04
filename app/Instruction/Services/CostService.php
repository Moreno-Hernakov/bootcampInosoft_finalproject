<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\CostRepository;

class CostService
{
    private CostRepository $costRepository;

	public function __construct() {
		$this->costRepository = new CostRepository();
	}
    /**
	 * NOTE: menambahkan instruction
	 */
	public function add(array $data)
	{
		$cost = $this->costRepository->create($data);
		return $cost;
	}

    /**
	 * NOTE: UNTUK mendapatkan data instruction 
	 */
	public function find(string $user)
	{
		$id = $this->costRepository->find($user);
		return $id;
	}
}
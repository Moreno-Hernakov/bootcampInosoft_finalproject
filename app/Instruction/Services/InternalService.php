<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\InternalRepository;

class InternalService
{
    private InternalRepository $internalRepository;

	public function __construct() {
		$this->internalRepository = new InternalRepository();
	}
    /**
	 * NOTE: menambahkan internal
	 */
	public function add(array $data)
	{
		$internal = $this->internalRepository->create($data);
		return $internal;
	}

    /**
	 * NOTE: UNTUK mendapatkan data internal 
	 */
	public function find(string $id)
	{
		$id = $this->internalRepository->find($id);
		return $id;
	}
}
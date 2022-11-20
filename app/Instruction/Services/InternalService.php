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

	// untuk edit internal
	public function editInternal(array $data){
		if(!$this->find($data['id'])){
			return 'ID Internal tidak ditemukan';
		}

		$status = $this->internalRepository->updateInternal($data);

		if($status){
			return $this->find($data['id']);
		} else {
			return 'Data Internal gagal diupdate';
		}
	}
}
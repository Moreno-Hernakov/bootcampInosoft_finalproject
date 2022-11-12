<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\CostRepository;

use function PHPUnit\Framework\isEmpty;

class CostService
{
    private CostRepository $costRepository;

	public function __construct() {
		$this->costRepository = new CostRepository();
	}
    /**
	 * NOTE: menambahkan cost
	 */
	public function add(array $data)
	{
		$cost = $this->costRepository->create($data);
		return $cost;
	}

    /**
	 * NOTE: UNTUK mendapatkan data cost 
	 */
	public function find(string $user)
	{
		$id = $this->costRepository->find($user);
		return $id;
	}

	
	// untuk mendapatkan data cost berdasarkan..
	public function getWhere($coloumn, $id){
		$cost = $this->costRepository->getWhere($coloumn, $id);
		return $cost;
	}

	// untuk update data cost
	public function editCost(array $data){
		if($this->getWhere('instruction_id', $data['instruction_id'])->isEmpty()){
			return 'ID instruction tidak ditemukan!';
		}

		$status = $this->costRepository->updateCost($data);

		if($status){
			return $this->getWhere('instruction_id', $data['instruction_id'])[0];
		} else {
			return 'gagal update cost';
		}
	}
}
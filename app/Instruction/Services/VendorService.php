<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\VendorRepository;


class VendorService
{
    private VendorRepository $vendorRepository;

	public function __construct() {
		$this->vendorRepository = new VendorRepository();
	}
    /**
	 * NOTE: menambahkan cost
	 */
	public function add(array $data)
	{
		$vendor = $this->vendorRepository->create($data);
		return $vendor;
	}

    /**
	 * NOTE: UNTUK mendapatkan data cost 
	 */
	public function find(string $vendor)
	{
		$id = $this->vendorRepository->find($vendor);
		return $id;
	}

	public function getAllAssignedVendor(){
		$vendor = $this->vendorRepository->getAllAssignedVendor();
		return $vendor;
	}

	
	// untuk mendapatkan data cost berdasarkan..
	public function getWhere($coloumn, $id){
		$vendor = $this->vendorRepository->getWhere($coloumn, $id);
		return $vendor;
	}
}
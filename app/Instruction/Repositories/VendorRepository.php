<?php

namespace App\Instruction\Repositories;

use App\Models\Vendor;

class VendorRepository
{
    
	/**
	 * Untuk menambahkan vendor
	 *  */
    public function create(array $data)
	{	
		if($id = $this->getWhere('assigned_vendor',$data['assigned_vendor'])->first()) {

			$vendor_address = isset($id['vendor_address']) ? $id['vendor_address'] : [];

			$vendor_address[] = [
				'_id'=> (string) new \MongoDB\BSON\ObjectId(),
				'vendor_address'=>$data['vendor_address'],
			];

			$id['vendor_address'] = $vendor_address;
			$id['updated_at'] = time();
    		$id->save();

			return $id;
		}

		$vendor_address[] = [
			'_id'=> (string) new \MongoDB\BSON\ObjectId(),
			'vendor_address'=>$data['vendor_address'],
		];

		$dataSaved = [
			'assigned_vendor'=>$data['assigned_vendor'],
			'vendor_address'=>$vendor_address,
			'created_at'=>time()
		];

		$id = Vendor::create($dataSaved);	
        $id->save();
		
		return $id;
	}

    /**
	 * Untuk mendapatkan data vendor berdasarkan id
	 *  */
	public function find(string $id)
	{
		$vendor = Vendor::find($id);
		return $vendor;
	}

	public function getAllAssignedVendor()
	{
		$vendor = Vendor::all('assigned_vendor');
		return $vendor;
	}

    public function getWhere($coloumn, $id){
		return Vendor::where($coloumn, $id)->get();
	}
}
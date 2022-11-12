<?php

namespace App\Instruction\Repositories;

use App\Models\cost;

class CostRepository
{
	/**
	 * Untuk menambahkan cost
	 *  */
    public function create(array $data)
	{	
		$dataSaved = [
			'instruction_id'=>$data['instruction_id'],
			'desc'=>$data['desc'],
			'qty'=>$data['qty'],
			'uom'=>$data['uom'],
			'unit_price'=>$data['unit_price'],
			'disc'=>$data['disc'],
			'gst_vat'=>$data['gst_vat'],
			'user_id'=>$data['user_id'],
			'total'=>$data['total'],
			'created_at'=>time()
		];

		$id = cost::create($dataSaved);	
        $id->save();
		
		return $id;
	}

    /**
	 * Untuk mendapatkan data cost berdasarkan id
	 *  */
	public function find(string $id)
	{

		$instruction = cost::find($id);
		return $instruction;
		;
	}

	// untuk mendapatkan data cost berdasaran 
	public function getWhere($coloumn, $id){
		return cost::where($coloumn, $id)->get();
	}

	// untuk update cost berdasarkan id
	public function updateCost(array $data){
		$dataSaved = [
			'desc'=>$data['desc'],
			'qty'=>$data['qty'],
			'uom'=>$data['uom'],
			'unit_price'=>$data['unit_price'],
			'disc'=>$data['disc'],
			'gst_vat'=>$data['gst_vat'],
			'user_id'=>$data['user_id'],
			'total'=>$data['total'],
			'updated_at'=>time()
		];

		return cost::where('instruction_id', $data['instruction_id'])->update($dataSaved);
	}
}
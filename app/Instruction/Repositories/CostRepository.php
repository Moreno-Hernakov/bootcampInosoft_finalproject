<?php

namespace App\Instruction\Repositories;

use App\Models\cost;

class CostRepository
{
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
	 * Untuk mendapatkan data user berdasarkan id
	 *  */
	public function find(string $id)
	{

		$instruction = cost::find($id);
		return $instruction;
		;
	}
}
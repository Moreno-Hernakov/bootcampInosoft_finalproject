<?php

namespace App\Instruction\Repositories;

use App\Models\instruction;
use App\Models\internalOnly;

class InternalRepository
{
    /**
	 * Untuk membuat note internal
	 */
	public function create(array $data)
	{
		if (isset($data['attachment'])) {
				$name = time().'_'.$data['attachment']->getClientOriginalName();
				$filePath = $data['attachment']->storeAs('uploads/internal',$name);
				$path = '/storage/' . $filePath;
				$attachment[] =[
					'file_name' => $name,
					'file_path' => $path
				];
		}
		else {
			$attachment = [];
		}
		
		$dataSaved = [
            'instruction_id'=>$data['instruction_id'],
            'user_id'=>auth('api')->user()->id,
            'desc'=>$data['desc'],
            'attachment'=>$attachment,
			'created_at'=>time()
		];

		$id = internalOnly::create($dataSaved);	
        $id->save();
		
		return $id;
	}

	/**
	 * Untuk mendapatkan data note internal berdasarkan id
	 *  */
	public function find(string $id)
	{

		$id = internalOnly::find($id);
		return $id;
		;
	}
}
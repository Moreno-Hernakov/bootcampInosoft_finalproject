<?php

namespace App\Instruction\Repositories;

use App\Models\vendorInvoice;
use Illuminate\Support\Facades\Storage;

class InvoiceRepository
{
    /**
	 * Untuk membuat invoice
	 */
	public function create(array $data)
	{
		if (isset($data['attachment'])) {
				$name = time().'attachment__'.$data['attachment']->getClientOriginalName();
				$filePath = $data['attachment']->storeAs('uploads/invoice',$name);
				$path = '/storage/' . $filePath;
				$attachment[] =[
					'file_name' => $name,
					'file_path' => $path
				];
		}
		else {
			$attachment = [];
		}

        if (isset($data['document'])) {
            $name = time().'document__'.$data['document']->getClientOriginalName();
            $filePath = $data['document']->storeAs('uploads/invoice',$name);
            $path = '/storage/' . $filePath;
            $document[] =[
                'file_name' => $name,
                'file_path' => $path
            ];
    }
    else {
        $document = [];
    }

		$dataSaved = [
            'instruction_id'=>$data['instruction_id'],
            'invoice_no'=>$data['invoice_no'],
            'attachment'=>$attachment,
            'document'=>$document,
			'created_at'=>time()

		];

		$id = vendorInvoice::create($dataSaved);	
        $id->save();
		
		return $id;
	}

	/**
	 * Untuk mendapatkan data invoice berdasarkan id
	 *  */
	public function find(string $id)
	{

		$id = vendorInvoice::find($id);
		return $id;
		;
	}

	// untuk update invoice berdasarkan id
	public function updateInvoice(array $data){

		$oldData = $this->find($data['id']);

		if (isset($data['attachment'])) {
			$name = time().'attachment__'.$data['attachment']->getClientOriginalName();
			$filePath = $data['attachment']->storeAs('/uploads/invoice',$name);
			$path = '/storage/' . $filePath;
			$attachment[] =[
				'file_name' => $name,
				'file_path' => $path
			];
			$dataSaved['attachment'] = $attachment;
	}
	else {
		$attachment = [];
	}

	if($oldData->attachment){
		unlink(storage_path() . '/app/uploads/invoice/'.$oldData->attachment[0]['file_name']);
		}

	if (isset($data['document'])) {
		$name = time().'document__'.$data['document']->getClientOriginalName();
		$filePath = $data['document']->storeAs('uploads/invoice',$name);
		$path = '/storage/' . $filePath;
		$document[] =[
			'file_name' => $name,
			'file_path' => $path
		];
	}
	else {
		$document = [];
	}

	if($oldData->document){
		unlink(storage_path() . '/app/uploads/invoice/'.$oldData->document[0]['file_name']);
		}

	$dataSaved = [
		'invoice_no'=>$data['invoice_no'],
		'updated_at'=>time(),
		'document' => $document,
		'attachment' => $attachment
	];

	return vendorInvoice::where('_id', $data['id'])->update($dataSaved);

	}
}
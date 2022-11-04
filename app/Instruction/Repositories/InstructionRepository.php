<?php

namespace App\Instruction\Repositories;

use App\Models\cost;
use App\Models\instruction;
use App\Models\internalOnly;
use App\Models\vendorInvoice;

class InstructionRepository
{
	/**
	 * Untuk membuat minghitung jumlah id berdasarkan type
	 */
	private function countId($type) : String{
        $id = count(instruction::where('type',$type)->get());
        return  sprintf("%04d", $id);
    }

	/**
	 * Untuk menambahkan instruction
	 */
	public function create(array $data)
	{
        if ($data['type'] == 'Logistic Instruction') {
            $instruction_id = 'LI-'.date('Y').'-'.$this->countId($data['type']);
        } elseif ($data['type'] == 'Service Instruction') {
			$instruction_id = 'SI-'.date('Y').'-'.$this->countId($data['type']);
		}

		$quotation = isset($data['quotation']) ? $data['quotation']: '';
		$customer_po = isset($data['customer_po']) ? $data['customer_po']: '';
		$desc_notes = isset($data['desc_notes']) ? $data['desc_notes']: '';
		$linkTo = isset($data['link_to']) ? $data['link_to']: '';

		if (isset($data['attachment'])) {
				$name = time().'_'.$data['attachment']->getClientOriginalName();
				$filePath = $data['attachment']->storeAs('uploads/instruction',$name);
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
			'instruction_id'=>$instruction_id,
			'type'=>$data['type'],
			'assigned_vendor'=>$data['assigned_vendor'],
			'attention_of'=>$data['attention_of'],
			'quotation'=>$quotation,
			'vendor_address'=>$data['vendor_address'],
			'customer_po' => $customer_po,
			'customer_contract' =>$data['customer_contract'],
			'status'=>  0,
			'invoice_to'=>$data['invoice_to'],
			'attachment'=>$attachment,
			'desc_notes'=>$desc_notes,
			'link_to'=>$linkTo,
			'created_at'=>time()
		];

		$id = instruction::create($dataSaved);	
        $id->save();
		
		return $id;
	}

	/**
	 * Untuk mendapatkan data instruction berdasarkan id
	 *  */
	public function find(string $id)
	{

		$instruction = instruction::find($id);
		return $instruction;
	}

	
	/**
	 * Untuk mendapatkan semua data instruction
	 *  */
	public function getAll()
	{
		return instruction::all('_id','link_to','type','assigned_vendor','attention_of','quote','customer_po','status');
	}

	/**
	 * Untuk mendapatkan detail instruction 
	 *  */
	public function getDetail($id)
	{
		$getInstruction = instruction::find($id);
		if(!$getInstruction){
			return $instruction = [
				'success' => false,
                'message' => 'ID tidak ditemukan'
			];
		}
		$getCost[] = cost::where('instruction_id', $id)->get();
		$getInternal[] = internalOnly::where('instruction_id', $id)->get();
		$getInvoice[] = vendorInvoice::where('instruction_id', $id)->get();

		$instruction = [
			'instruction_id'=>$getInstruction['instruction_id'],
			'type'=>$getInstruction['type'],
			'assigned_vendor'=>$getInstruction['assigned_vendor'],
			'attention_of'=>$getInstruction['attention_of'],
			'quotation'=>$getInstruction['quotation'],
			'vendor_address'=>$getInstruction['vendor_address'],
			'customer_po' => $getInstruction['customer_po'],
			'customer_contract' =>$getInstruction['customer_contract'],
			'status'=>  $getInstruction['status'],
			'invoice_to'=>$getInstruction['invoice_to'],
			'attachment'=>$getInstruction['attachment'],
			'desc_notes'=>$getInstruction['desc_notes'],
			'link_to'=>$getInstruction['linkTo'],
			'costs' => $getCost,
			'invoice' =>$getInvoice,
			'internal_only'=>$getInternal,
			'created_at'=>$getInstruction['created_at'],
			'updated_at'=>$getInstruction['updated_at	'],
		];
		return $instruction;
	}

	public function updateInstruction(array $data, $id){
		if ($data['type'] == 'Logistic Instruction') {
            $instruction_id = 'LI-'.date('Y').'-'.$this->countId($data['type']);
        } elseif ($data['type'] == 'Service Instruction') {
			$instruction_id = 'SI-'.date('Y').'-'.$this->countId($data['type']);
		}

		$quotation = isset($data['quotation']) ? $data['quotation']: '';
		$customer_po = isset($data['customer_po']) ? $data['customer_po']: '';
		$desc_notes = isset($data['desc_notes']) ? $data['desc_notes']: '';
		$linkTo = isset($data['link_to']) ? $data['link_to']: '';

		if (isset($data['attachment'])) {
				$name = time().'_'.$data['attachment']->getClientOriginalName();
				$filePath = $data['attachment']->storeAs('uploads/instruction',$name);
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
			'instruction_id'=>$instruction_id,
			'type'=>$data['type'],
			'assigned_vendor'=>$data['assigned_vendor'],
			'attention_of'=>$data['attention_of'],
			'quotation'=>$quotation,
			'vendor_address'=>$data['vendor_address'],
			'customer_po' => $customer_po,
			'customer_contract' =>$data['customer_contract'],
			'status'=>  0,
			'invoice_to'=>$data['invoice_to'],
			// 'attachment'=>$attachment,
			'desc_notes'=>$desc_notes,
			'link_to'=>$linkTo,
			'created_at'=>time()
		];
		
		instruction::where('_id', $id)->push('attachment', $attachment);
		$id = instruction::where('_id', $id)->update($dataSaved);

		return $id;
	}
}
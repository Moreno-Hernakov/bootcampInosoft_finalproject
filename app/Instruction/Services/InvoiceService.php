<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\InvoiceRepository;
use Illuminate\Support\Arr;

class InvoiceService
{
    private InvoiceRepository $invoiceRepository;

	public function __construct() {
		$this->invoiceRepository = new InvoiceRepository();
	}
    /**
	 * NOTE: menambahkan invoice
	 */
	public function add(array $data)
	{
		$invoice = $this->invoiceRepository->create($data);
		return $invoice;
	}

    /**
	 * NOTE: UNTUK mendapatkan data invoice 
	 */
	public function find(string $id)
	{
		$id = $this->invoiceRepository->find($id);
		return $id;
	}

	// untuk edit invoice
	public function editInvoice(array $data){

		if(!$this->find($data['id'])){
			return 'ID invoice tidak ditemukan';
		}

		$status = $this->invoiceRepository->updateInvoice($data);

		if($status){
			return $this->find($data['id']);
		} else {	
			return 'Invoice gagal diupdate';
		}
	}
}
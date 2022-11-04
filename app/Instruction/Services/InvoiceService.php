<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\InvoiceRepository;

class InvoiceService
{
    private InvoiceRepository $invoiceRepository;

	public function __construct() {
		$this->invoiceRepository = new InvoiceRepository();
	}
    /**
	 * NOTE: menambahkan instruction
	 */
	public function add(array $data)
	{
		$invoice = $this->invoiceRepository->create($data);
		return $invoice;
	}

    /**
	 * NOTE: UNTUK mendapatkan data instruction 
	 */
	public function find(string $id)
	{
		$id = $this->invoiceRepository->find($id);
		return $id;
	}
}
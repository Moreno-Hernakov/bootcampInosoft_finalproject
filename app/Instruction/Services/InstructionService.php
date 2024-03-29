<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\InstructionRepository;

class InstructionService

{
	private InstructionRepository $instructionRepository;

	public function __construct()
	{
		$this->instructionRepository = new InstructionRepository();
	}
	/**
	 * NOTE: menambahkan instruction
	 */
	public function addInstruction(array $data)
	{
		$instruction = $this->instructionRepository->create($data);
		return $instruction;
	}

	/**
	 * NOTE: UNTUK mendapatkan data instruction 
	 */
	public function find(string $id)
	{
		$id = $this->instructionRepository->find($id);
		return $id;
	}


	/**
	 * NOTE: UNTUK mendapatkan semua data instruction 
	 */
	public function getAll()
	{
		$id = $this->instructionRepository->getAll();
		return $id;
	}


	/**
	 * NOTE: UNTUK mendapatkan detail instruction 
	 */
	public function getDetail($id)
	{
		$id = $this->instructionRepository->getDetail($id);
		return $id;
	}

	// NOTE: untuk mengedit / modify instruction
	public function editInstruction(array $data)
	{

		$instruction = $this->instructionRepository->find($data['id']);

		if (!$instruction) {
			return ['status' => false, 'message' => 'ID tidak ditemukan'];
		}

		$status = $this->instructionRepository->updateInstruction($data);

		if ($status) {
			$instruction = $this->instructionRepository->find($data['id']);
			return $instruction;
		} else {
			return ['status' => false, 'message' => 'gagal update'];
		}
	}
	public function recieveInvoice(array $data)
	{
		$instruction = $this->instructionRepository->find($data['id']);

		if (!$instruction) {
			return ['status' => false, 'message' => 'ID tidak ditemukan'];
		}

		if ($instruction->status != 0) {
			return ['message' => 'Tidak Dapat di Recieive'];
		}

		$status = $this->instructionRepository->recieve($data);

		if ($status) {
			$instruction = $this->instructionRepository->find($data['id']);
			return $instruction;
		} else {
			return ['status' => false, 'message' => 'Gagal Menerima Invoice'];
		}
	}

	public function getAllComplete()
	{
		$id = $this->instructionRepository->getAllComplete();
		return $id;
	}

	// terminated
	public function terminated(array $data)
	{
		$instruction = $this->instructionRepository->find($data['id']);

		if (!$instruction) {
			return ['status' => false, 'message' => 'ID tidak ditemukan'];
		}

		if ($instruction->status != 0) {

			return ['message' => 'Tidak Dapat Terminate'];
		}

		$status = $this->instructionRepository->terminated($data);

		if ($status) {
			$instruction = $this->instructionRepository->find($data['id']);
			return $instruction;
		} else {
			return ['status' => false, 'message' => 'Gagal Terminate'];
		}
	}
}

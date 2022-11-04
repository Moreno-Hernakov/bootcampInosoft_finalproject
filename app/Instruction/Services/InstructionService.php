<?php

namespace App\Instruction\Services;

use App\Instruction\Repositories\InstructionRepository;

class InstructionService

{
    private InstructionRepository $instructionRepository;

	public function __construct() {
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

	public function getAll()
	{
		$id = $this->instructionRepository->getAll();
		return $id;
	}

	public function getDetail($id)
	{
		$id = $this->instructionRepository->getDetail($id);
		return $id;
	}
}
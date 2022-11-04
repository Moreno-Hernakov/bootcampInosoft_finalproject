<?php

namespace App\Http\Controllers;

use App\Instruction\Services\InstructionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstructionController extends Controller
{
    private InstructionService $instructionService;
	
    public function __construct() {
		$this->instructionService = new InstructionService();
	}
    
    /**
	 * Untuk membuat instruction
	 */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' =>'required',
            'assigned_vendor' =>'required',
            'attention_of' =>'required',
            'vendor_address' =>'required',
            'customer_contract' =>'required',
            'invoice_to' =>'required',
            'attachment'=>'mimes:pdf,doc,docx',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $id = $this->instructionService->addInstruction($credentials);
        $instruction = $this->instructionService->find($id['_id']);
        return response()->json($instruction,200);

    }

     /**
	 * Untuk menampilkan semua instruction
	 */
    public function show()
	{
		$id = $this->instructionService->getAll();
		return response()->json($id,200);
	}

      /**
	 * Untuk menampilkan detail instruction
	 */
    public function detail($id)
	{
		$instruction = $this->instructionService->getDetail($id);
        return response()->json($instruction);
		
	}

    // untuk modify instruction
    public function edit(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'type' =>'required',
            'assigned_vendor' =>'required',
            'attention_of' =>'required',
            'vendor_address' =>'required',
            'customer_contract' =>'required',
            'invoice_to' =>'required',
            'attachment'=>'mimes:pdf,doc,docx',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $instruction = $this->instructionService->editInstruction($credentials, $id);

        return response()->json($instruction);

    }
}

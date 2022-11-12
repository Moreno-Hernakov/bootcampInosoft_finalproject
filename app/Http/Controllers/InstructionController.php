<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Instruction\Services\InstructionService;

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
    public function edit(Request $request){

        $validator = Validator::make($request->all(), [
            'type' =>'required',
            'assigned_vendor' =>'required',
            'attention_of' =>'required',
            'vendor_address' =>'required',
            'customer_contract' =>'required',
            'invoice_to' =>'required',
            'attachment'=>'mimes:pdf,doc,docx',
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $instruction = $this->instructionService->editInstruction($credentials);

        return response()->json($instruction);

    }
    
    public function recieveInvoice(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $credentials = $request->all();

        $status = $this->instructionService->recieveInvoice($credentials);
        return response()->json($status);
    }

    public function showComplete(){
        $id = $this->instructionService->getAllComplete();
		return response()->json($id,200);
    }
    public function exportpdf($id){
		$instruction = $this->instructionService->getDetail($id);

        $pdf = PDF::loadview('pdf',compact('instruction'));
    	return $pdf->stream('instruktsi.pdf');
    }
    
}

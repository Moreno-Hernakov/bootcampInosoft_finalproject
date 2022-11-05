<?php

namespace App\Http\Controllers;

use App\Instruction\Services\InvoiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{
    private InvoiceService $invoiceService;
	
    public function __construct() {
		$this->invoiceService = new InvoiceService();
	}
    
    /**
	 * Untuk membuat vendor invoice
	 */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'attachment'=>'mimes:pdf,doc,docx',
            'document'=>'mimes:pdf,doc,docx',
            'instruction_id' => 'required',
            'invoice_no' => 'required',
            
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        $credentials = $request->all();
    
        $id = $this->invoiceService->add($credentials);
        $data = $this->invoiceService->find($id['_id']);
        return response()->json($data,200);
    }

    // untuk edit vendor invoice
    public function edit(Request $request){
        $validator = Validator::make($request->all(), [
            'attachment'=>'mimes:pdf,doc,docx',
            'document'=>'mimes:pdf,doc,docx',
            'invoice_no' => 'required',
            'id' => 'required'          
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        $credentials = $request->all();
        return response()->json($this->invoiceService->editInvoice($credentials));
    }
}

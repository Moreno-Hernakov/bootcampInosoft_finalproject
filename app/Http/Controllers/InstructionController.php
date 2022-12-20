<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Exports\InstructionExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use App\Instruction\Services\InstructionService;
use App\Models\instruction;

class InstructionController extends Controller
{
    private InstructionService $instructionService;

    public function __construct()
    {
        $this->instructionService = new InstructionService();
    }

    /**
     * Untuk membuat instruction
     */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'assigned_vendor' => 'required',
            'attention_of' => 'required',
            'vendor_address' => 'required',
            'customer_contract' => 'required',
            'invoice_to' => 'required',
            'attachment' => 'mimes:pdf,doc,docx',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $id = $this->instructionService->addInstruction($credentials);
        $instruction = $this->instructionService->find($id['_id']);
        return response()->json($instruction, 200);
    }

    /**
     * Untuk menampilkan semua instruction
     */
    public function show()
    {
        $id = $this->instructionService->getAll();
        return response()->json($id, 200);
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
    public function edit(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'assigned_vendor' => 'required',
            'attention_of' => 'required',
            'vendor_address' => 'required',
            'customer_contract' => 'required',
            'invoice_to' => 'required',
            'attachment' => 'mimes:pdf,doc,docx',
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $instruction = $this->instructionService->editInstruction($credentials);

        return response()->json($instruction);
    }

    public function recieveInvoice(Request $request)
    {
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

    public function showComplete()
    {
        $id = $this->instructionService->getAllComplete();
        return response()->json($id, 200);
    }
    //  Export PDF : yang di export adalah detail instruction
    public function exportpdf($id)
    {
        $instruction = $this->instructionService->getDetail($id);
        
        $pdf = PDF::loadview('exports.pdf', compact('instruction'));
        return $pdf->stream('instruktsi.pdf');
    }
    // Export Excel
    public function exportexcel(){
        return Excel::download(new InstructionExport, 'Data Instruction.xlsx');
    }

    // terminated
    public function terminated(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'attachment' => 'mimes:pdf,doc,docx',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $instruction = $this->instructionService->terminated($credentials);
        return response()->json($instruction);
    }
}

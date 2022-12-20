<?php

namespace App\Exports;

use App\Models\instruction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Maatwebsite\Excel\Concerns\FromCollection;

class InstructionExport implements FromView
{
    public function view(): View
    {
        return view('exports.ExcelInstruction', [
            'instructions' => instruction::all()
        ]);
    }
}

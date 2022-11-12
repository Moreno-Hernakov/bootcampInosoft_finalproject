<?php

namespace App\Http\Controllers;

use App\Instruction\Services\CostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CostController extends Controller
{
    private CostService $costService;
	
    public function __construct() {
		$this->costService = new CostService();
	}
    
    /**
	 * Untuk membuat cost
	 */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'instruction_id'=>'required',
			'desc'=>'required',
			'qty'=>'required',
			'uom'=>'required',
			'unit_price'=>'required',
			'disc'=>'required',
			'gst_vat'=>'required',
			'user_id'=>'required',
			'total'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $id = $this->costService->add($credentials);
        $cost = $this->costService->find($id['_id']);
        return response()->json($cost,200);

    }
}

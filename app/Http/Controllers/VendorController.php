<?php

namespace App\Http\Controllers;

use App\Instruction\Services\VendorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    private VendorService $vendorService;
	
    public function __construct() {
		$this->vendorService = new VendorService();
	}
    
    /**
	 * Untuk membuat cost
	 */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'assigned_vendor'=>'required|string',
			'vendor_address'=>'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->all();

        $id = $this->vendorService->add($credentials);
        $vendor = $this->vendorService->find($id['_id']);
        return response()->json($vendor,200);

    }

    public function getAssignedVendor()
    {
        $vendor = $this->vendorService->getAllAssignedVendor();
        if (!$vendor) {
			return response()->json([
                'success' => false,
                'message' => 'No Data',
            ],404);
		}
        return response()->json($vendor,200);
    }

    public function getVendorAddress($id)
    {
        $vendor = $this->vendorService->find($id);
        if (!$vendor) {
			return response()->json([
                'success' => false,
                'message' => 'No Data',
            ],404);
		}
        return response()->json($vendor,200);
    }
}

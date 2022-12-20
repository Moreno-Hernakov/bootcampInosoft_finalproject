<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vendor;
use App\Models\instruction;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('rahasia123')
        ]);

        for ($i = 0; $i <= 20; $i++) {
            vendor::create([
                "assigned_vendor" => "smeas" . $i,
                "vendor_address" => "Jl. smeas" . $i
            ]);
        }

        for ($i = 0; $i <= 20; $i++) {
            instruction::create([
                'instruction_id' => 'LI-' . date('Y') . '-' . $i,
                'link_to' => 'company' . $i,
                'type' => 'LI',
                'assigned_vendor' => 'vendor ' . $i,
                'vendor_address' => 'jalan blablalba ' . $i,
                'attention_of' => Str::random(10),
                'quotation' => 'quotes' . $i,
                'customer_contract' => $i,
                'customer_po' => 'po' . $i,
                'status' => '0',
                'invoice_to' => 'to ' . $i,
                'atachment' => 'attachment ' . $i,
                'desc_notes' => 'desc ' . $i,
            ]);
        }
    }
}

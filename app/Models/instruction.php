<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class instruction extends Model
{
    protected $collection = 'instructions';
    protected $connection = 'mongodb';
    
    protected $fillable = [
        'instruction_id',
        'type',
        'assigned_vendor',
        'attention_of',
        'quotation',
        'vendor_address',
        'customer_po',
        'customer_contract',
        'status',
        'invoice_to',
        'attachment',
        'desc_notes',
        'link_to',
    ];
}



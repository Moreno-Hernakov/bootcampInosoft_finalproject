<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class vendorInvoice extends Model
{
    protected $collection = 'vendor_invoices';
    protected $connection = 'mongodb';
    // use HasFactory;  

    protected $fillable = [
        'instruction_id',
        'invoice_no',
        'attachment',
        'document',];
}

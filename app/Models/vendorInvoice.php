<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class vendorInvoice extends Model
{
    protected $collection = 'vendorInvoice_collection';
    protected $connection = 'mongodb';
    use HasFactory;
}

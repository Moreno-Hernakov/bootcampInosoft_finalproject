<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class cost extends Model
{
    protected $collection = 'costs';
    protected $connection = 'mongodb';
    protected $fillable = [
        'instruction_id',
        'desc',
        'qty',
        'uom',
        'unit_price',
        'disc',
        'gst_vat',
        'user_id',
        'total',
    ];
}

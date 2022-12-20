<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $collection = 'customers';
    protected $connection = 'mongodb';
    protected $guarded = ['id'];
}

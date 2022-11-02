<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class instruction extends Model
{
    protected $collection = 'instruction_collection';
    protected $connection = 'mongodb';
    use HasFactory;
}

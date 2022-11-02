<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class cost extends Model
{
    protected $collection = 'cost_collection';
    protected $connection = 'mongodb';
    use HasFactory;
}

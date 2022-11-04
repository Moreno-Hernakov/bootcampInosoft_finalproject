<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class internalOnly extends Model
{
    protected $collection = 'internal_onlies';
    protected $connection = 'mongodb';
    
    protected $fillable = [
        'instruction_id',
        'user_id',
        'desc',
        'attachment',];
}

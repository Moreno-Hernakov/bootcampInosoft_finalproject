<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Vendor extends Model
{
    protected $collection = 'vendor';
    protected $connection = 'mongodb';
    // use HasFactory;  

    protected $fillable = [
        'assigned_vendor',
        'vendor_address',];
}

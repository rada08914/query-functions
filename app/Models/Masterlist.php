<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterlist extends Model
{
    use HasFactory;
    protected $table='master_lists';
    protected $filable=[
        'name',
        'age',
        'gender',
        'status',
        'total_payment',
        'birthday'
    ];
    
}

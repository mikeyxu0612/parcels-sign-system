<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;
    protected  $table="addresses";
    protected  $fillable=[
        'address',
        'B_ID',
        'phone',
    ];

}

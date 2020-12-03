<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parcel extends Model
{
    use HasFactory;
 /*   protected  $table="parcels";*/
    protected  $fillable=[
        'A_ID',
        'sign',
        'sign_time',
        'Sign_proof',
        'created_at',
        'updated_at'
    ];
}

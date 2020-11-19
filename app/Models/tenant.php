<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenant extends Model
{
    use HasFactory;
    protected  $table="tenants";
    protected  $fillable=[
        'T_name',
        'phone',
        'A_ID',
    ];
}

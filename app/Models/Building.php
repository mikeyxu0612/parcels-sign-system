<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class building extends Model
{
    use HasFactory;

    /* protected  $table="Buildings";*/
    protected $fillable = [
        'B_Name',
        'created_at',
        'updated_at'
    ];

    public function scopeAllData($query)
    {

    }
}

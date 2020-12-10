<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenant extends Model
{
    use HasFactory;
 /*   protected  $table="tenants";*/
    protected  $fillable=[
        'T_name',
        'phone',
        'A_ID',
        'created_at',
        'updated_at'
    ];
    public function scopeAllData($query)
    {
        $query ->orderBy('tenants.id')
            ->select(
                'tenants.id',
                'tenants.T_name',
                'tenants.phone',
                'tenants.A_ID'
            );
    }
}

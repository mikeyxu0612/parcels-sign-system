<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\parcelscontroller;
use App\Http\Controllers\addresscontroller;
use App\Http\Controllers\tenantscontroller;
use App\Http\Controllers\Buildingscontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('parcel_receipt_sys');
});


Route::get( 'addresses',[addresscontroller::class,'index']);

Route::get( 'addresses/create',[addresscontroller::class,'create']);

Route::get( 'addresses/{id}',[addresscontroller::class,'show'])->where('id','[0-9]+');

Route::get( 'addresses/{id}/edit',[addresscontroller::class,'edit'])->where('id','[0-9]+');


Route::get( 'Buildings',[Buildingscontroller::class,'index']);

Route::get( 'Buildings/create',[Buildingscontroller::class,'create']);

Route::get( 'Buildings/{id}',[Buildingscontroller::class,'show'])->where('id','[0-9]+');

Route::get( 'Buildings/{id}/edit',[Buildingscontroller::class,'edit'])->where('id','[0-9]+');


Route::get( 'parcels',[parcelscontroller::class,'index']);

Route::get( 'parcels/create',[parcelscontroller::class,'create']);

Route::get( 'parcels/{id}',[parcelscontroller::class,'show'])->where('id','[0-9]+');

Route::get( 'parcels/{id}/edit',[parcelscontroller::class,'edit'])->where('id','[0-9]+');


Route::get( 'tenants',[tenantscontroller::class,'index']);

Route::get( 'tenants/create',[tenantscontroller::class,'create']);

Route::get( 'tenants/{id}',[tenantscontroller::class,'show'])->where('id','[0-9]+');

Route::get( 'tenants/{id}/edit',[tenantscontroller::class,'edit'])->where('id','[0-9]+');

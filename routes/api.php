<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\parcelscontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register',[AuthController::class,'register']);

Route::post('login',[AuthController::class,'login']);


Route::group(['middleware'=>'auth:sanctum'],function (){
   Route::get('parcels',[parcelscontroller::class,'api_parcels']) ;

    Route::delete('delete',[parcelscontroller::class,'api_delete']);

    Route::patch('update',[parcelscontroller::class,'api_update']);
});

<?php

use App\Http\Controllers\Api\DepartemenApiController;
use App\Http\Controllers\Api\JabatanApiController;
use App\Http\Controllers\Api\PekerjaApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('pekerja', PekerjaApiController::class);  //Mengatur api pekerja
Route::apiResource('departemen', DepartemenApiController::class);    //Mengatur api departemen
Route::apiResource('jabatan', JabatanApiController::class);      //Mengatur api jabatan
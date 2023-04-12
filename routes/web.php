<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);            //Menampilkan Data
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);    //Menginput Data
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);     //Menyimpn Data
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);     //Mengedit Data
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);     //Mengedit Data
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);     //Mengupdate Data
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);     //Mengupdate Data

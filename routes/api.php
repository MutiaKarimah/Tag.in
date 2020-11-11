<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/reservasi','ReservasiController@all'); //untuk metode read (menampilkan data semua reservasi)
Route::post('/reservasi','ReservasiController@create'); //untuk metode create (menambahkan data reservasi)
Route::get('/pengguna','PenggunaController@all'); //untuk metode read (menampilkan data semua pengguna)
Route::post('/pengguna','PenggunaController@create'); //untuk metode create (menambahkan data pengguna)
Route::get('/admin','AdminController@all'); //untuk metode read (menampilkan data semua admin)
Route::post('/admin','AdminController@create'); //untuk metode create (menambahkan data admin)
Route::get('/pengelola','PengelolaController@all'); //untuk metode read (menampilkan data semua pengelola)
Route::post('/pengelola','PengelolaController@create'); //untuk metode create (menambahkan data pengelola)
Route::get('/tempat','TempatController@all'); //untuk metode read (menampilkan data semua tempat)
Route::post('/tempat','TempatController@create'); //untuk metode create (menambahkan data tempat)
<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('signup', 'AuthController@showFormRegister')->name('signup');
Route::post('signup', 'AuthController@signup');

Route::group(['middleware' => 'auth'], function () {


    // Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
	Route::get('/detail/{IDtempat}', 'PenggunaController@detail' );

	Route::get('/booking', 'PenggunaController@booking' );

	Route::get('/', function () {
    return view('/pengguna/main');
	});

});

Route::get('/pengelolatempat', 'PengelolaController@pengelola_tempat' );
Route::get('/pengelolatempat/tambah', 'PengelolaController@pengelola_tambahtempat' );
Route::get('/pengelolareservasi', 'PengelolaController@pengelola_reservasi' );

Route::get('/main', 'PenggunaController@main' );
Route::get('/admintempat', 'AdminController@admin_tempat' );
Route::get('/adminreservasi', 'AdminController@admin_reservasi' );
Route::get('/adminpengguna', 'AdminController@admin_pengguna' );
Route::get('/adminpengelola', 'AdminController@admin_pengelola' );
Route::get('/adminadmin', 'AdminController@admin_admin' );
Route::get('/welcome', 'PenggunaController@index' );

// Route::get('/main', 'PenggunaController@main' );
// Route::get('/login', 'PenggunaController@login' );
// Route::get('/signup', 'PenggunaController@signup' );

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

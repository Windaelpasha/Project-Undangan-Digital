<?php

use Illuminate\Support\Facades\Route;

// use Symfony\Component\Routing\Annotation\Route;

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
    return view('welcome');
});
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/index', 'AdminController@index');

Route::get('/undangan/pemesan', 'PemesanController@pemesan')->name('undangan.pemesan');
Route::get('/undangan/pemesan/konfirmasi', 'PemesanController@ok');
Route::post('/undangan/pemesan/create', 'PemesanController@create')->name('undangan.create');
Route::post('/undangan/pemesan/tampil', 'PemesanController@tampil');
Route::post('/undangan/pemesan/{id}', 'PemesanController@type');
//type tambah
Route::get('/undangan/type', 'TypeController@tipe')->name('undangan.type');
Route::get('/undangan/type/hasil', 'TypeController@hasil');
Route::get('/crud_type/tambah', 'TypeController@tambah');
Route::post('/crud_type/tambah', 'TypeController@create');
// type edit
Route::get('crud_type/edit/{id}', 'TypeController@edit')->name('crud.edit');
Route::post('crud_type/update/{id}', 'TypeController@update')->name('crud.update');
//type delete
Route::get('crud_type/delete/{id}', 'TypeController@delete');

// buat order
Route::post('undangan/buat/create', 'BuatController@create')->name('undangan.buat');
Route::get('undangan/buat/{id}', 'BuatController@buat');

Route::get('/demo','DemoController@demo');
Route::post('/register','DemoController@masuk')->name('register');
Route::post('/register','DemoController@masuk');
Route::get('auth/login','DemoController@login');
Route::get('/welcome','DemoController@welcome');
Route::post('auth/login','DemoController@admin');
Route::post('/dashboard','AdminController@dashboard');
Route::get('/dashboard','AdminController@dashboard');
Auth::routes();

// hapus pemesan
// Route::get('/undangan/buat', 'PemesanController@masuk');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

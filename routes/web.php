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

Route::get('/undangan/pemesan', 'PemesanController@pemesan');
Route::get('/undangan/pemesan', 'PemesanController@ok');
Route::post('/undangan/pemesan', 'PemesanController@create');
Route::post('/undangan/pemesan', 'PemesanController@tampil');
//type tambah
Route::get('/undangan/type', 'TypeController@tipe');
Route::get('/undangan/type', 'TypeController@hasil');
Route::get('/crud_type/tambah', 'TypeController@tambah');
Route::post('/crud_type/tambah', 'TypeController@create');
// type edit
Route::get('crud_type/{id}/edit', 'TypeController@edit');
Route::post('crud_type/{id}/update', 'TypeController@update');
//type delete
Route::get('crud_type/{id}/delete', 'TypeController@delete');

// buat order
Route::get('undangan/buat', 'BuatController@buat');
Route::post('undangan/buat', 'BuatController@create');

// hapus pemesan
// Route::get('/undangan/buat', 'PemesanController@masuk');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//landing page
Route::get('/demo','DemoController@demo');
Route::post('/register','DemoController@masuk')->name('register');
Route::post('/register','DemoController@masuk');
Route::get('auth/login','DemoController@login');
Route::get('/welcome','DemoController@welcome');
Route::post('auth/login','DemoController@login');
Route::post('/dashboard','AdminController@dashboard');


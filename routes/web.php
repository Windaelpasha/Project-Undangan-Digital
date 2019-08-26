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
Route::get('/undangan/pemesan/{id}', 'PemesanController@delete');
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
Route::post('undangan/buat/create/{id}', 'BuatController@create')->name('buat.create');
Route::get('undangan/buat/{id}', 'BuatController@buat');
// data
Route::get('undangan/data', 'DataController@data')->name('data.undangan');
Route::get('undangan/data/{id}','DataController@delete')->name('data.delete');

//output

Auth::routes();

Route::get('/landing', 'LandingController@landing')->name('landing');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::get('/buatpesanan', 'BaruController@buatPesanan')->name('buatpesanan');

Route::get('/pesananselesai', 'SelesaiController@pesananselesai')->name('pesananselesai');

Route::get('/report', 'ReportController@report')->name('report');

Route::get('/hasil/{client_id}', 'HasilController@hasil')->name('hasil');

//ip


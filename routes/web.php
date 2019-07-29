<?php

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

Auth::routes();

Route::get('/landing', 'LandingController@landing')->name('landing');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::get('/buatpesanan', 'BaruController@buatPesanan')->name('buatpesanan');

Route::get('/pesananselesai', 'SelesaiController@pesananselesai')->name('pesananselesai');

Route::get('/report', 'ReportController@report')->name('report');

Route::get('/hasil', 'HasilController@hasil')->name('hasil');

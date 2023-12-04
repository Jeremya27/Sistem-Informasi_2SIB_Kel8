<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
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
// Route::resource('/dosen', \App\Http\Controllers\DosenController::class);
// Route::get('/layout', function () {
//     return view('layouts.main');
// });

Route::get('/jquery', function (){
    return view('jquery.main');
});

//Route::Resource('/formulir', App\Http\Controllers\FormulirController::class);

Route::resource('/siswa', \App\Http\Controllers\SiswaController::class);

// //Auth::routes();
// Route::get('/tabel_siswa', [SiswaController::class, 'index']);
// //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/siswa/create', 'SiswaController@create')->name('siswa.create');

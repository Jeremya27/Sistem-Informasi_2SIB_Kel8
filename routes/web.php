<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPelajaran;
use App\Http\Controllers\GuruSLBController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::resource('/guru1',\App\Http\Controllers\GuruSLBController::class);
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::Resource('/data_pelajaran', App\Http\Controllers\DataPelajaran::class);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [GuruSLBController::class, 'logout'])->name('logout');
Route::get('/logout', [GuruSLBController::class, 'logout'])->name('logout');
Route::post('/logout', [GuruSLBController::class, 'logout'])->name('logout');
// Alias for user index
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

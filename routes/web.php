
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiSiswaController;

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

Route::resource('/admin1',\App\Http\Controllers\AdminController::class);
//Auth::routes();

//Route::resource('/nilaisiswa',\App\Http\Controllers\NilaiSiswaController::class);
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

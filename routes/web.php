<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users',\App\Http\Controllers\UserController::class)
->middleware('auth');

Route::resource('siswas',\App\Http\Controllers\SiswaController::class)
->middleware('auth');

Route::resource('kelass',\App\Http\Controllers\KelasController::class)
->middleware('auth');

Route::resource('siswas', \App\Http\Controllers\SiswaController::class);

Route::get('/left-join',[\App\Http\Controllers\KelasController::class,'leftJoin']);

Route::get('/joins/inner', [\App\Http\Controllers\SiswaController::class, 'innerJoin'])->name('joins.inner');



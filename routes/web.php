<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', function () {return view('index');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard1', [App\Http\Controllers\LteController::class, 'dashboard1'])->name('dashboard1');
Route::get('/dashboard2', [App\Http\Controllers\LteController::class, 'dashboard2'])->name('dashboard2');
Route::get('/dashboard3', [App\Http\Controllers\LteController::class, 'dashboard3'])->name('dashboard3');
Route::get('/widgets', [App\Http\Controllers\LteController::class, 'widgets'])->name('widgets');
Route::get('/chartjs', [App\Http\Controllers\LteController::class, 'chartjs'])->name('chartjs');
Route::get('/flot', [App\Http\Controllers\LteController::class, 'flot'])->name('flot');

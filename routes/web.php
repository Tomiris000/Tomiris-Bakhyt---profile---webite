<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\clientcontroller;
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

Route::get('/client', [App\Http\Controllers\clientcontroller::class, 'index']);
Route::get('client/create' , [App\Http\Controllers\clientcontroller::class, 'create']);
Route::post('client/store' , [App\Http\Controllers\clientcontroller::class, 'store'])->name('add-client');
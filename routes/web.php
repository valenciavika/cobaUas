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
use App\Http\Controllers\signUp;
use App\Http\Controllers\login;
use App\Http\Controllers\dashboard;
Route::get('/{locale}', [signUp::class, 'index']);
Route::post('/{locale}', [signUp::class, 'store']);

Route::get('/{locale}/login', [login::class, 'index']);
Route::post('/{locale}/login', [login::class, 'store']);

Route::get('/dashboard/{locale}', [dashboard::class, 'index']);
Route::post('/logout/{locale}', [dashboard::class, 'logout']);

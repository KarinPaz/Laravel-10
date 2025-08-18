<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelController;


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

Route::get('/laravel_10', [LaravelController::class, 'index']) ->name('laravel.index');

Route::get('/laravel_10/{id}', [LaravelController::class, 'show']) ->name('laravel.show');
<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\TodoController::class, 'index'])
->name('get_post_page');

Route::get('/create', [\App\Http\Controllers\TodoController::class, 'get_create_page'])
    ->name('get_create_page');
Route::post('/create', [\App\Http\Controllers\TodoController::class, 'post_create_store',])
    ->name('post_create_store');
Route::get('/delete/{id}', [\App\Http\Controllers\TodoController::class, 'delete',])
    ->name('delete');

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

Route::get('/', [App\Http\Controllers\AppController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\AppController::class, 'createUser'])->name('create-user');
Route::get('/users/{id}', [App\Http\Controllers\AppController::class, 'viewUser'])->name('view-user');

Route::post('/create', [App\Http\Controllers\AppController::class, 'addUser'])->name('add-user');
Route::post('/users/{id}/task', [App\Http\Controllers\AppController::class, 'addTask'])->name('add-task');
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('users', \App\Http\Controllers\UserController::class)->middleware(['auth']);
Route::resource('materials', \App\Http\Controllers\MaterialController::class)->middleware(['auth']);
Route::resource('suppliers', \App\Http\Controllers\SupplierController::class)->middleware(['auth']);
Route::resource('supplier users', \App\Http\Controllers\SupplierUserController::class)->middleware(['auth']);
require __DIR__.'/auth.php';

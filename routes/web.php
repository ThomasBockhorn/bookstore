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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('XssSanitizer')->group(function () {
    Route::resource('book', App\Http\Controllers\BookController::class);
    Route::resource('customer', App\Http\Controllers\CustomerController::class);
    Route::resource('comment', App\Http\Controllers\CommentController::class)->except(['index', 'edit', 'show']);
});
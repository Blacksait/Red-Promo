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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//Route::get('/articles', [App\Http\Controllers\HomeController::class, 'articles'])->name('articles');
Route::resource('/articles', \App\Http\Controllers\ArticleController::class);
Route::get('/', [App\Http\Controllers\ArticleController::class, 'favorites'])->name('favorites');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

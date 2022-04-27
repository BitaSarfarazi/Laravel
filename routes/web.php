<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\ShowController;
use \App\Http\Controllers\CreateController;
use \App\Http\Controllers\EditController;
use \App\Http\Controllers\DestroyController;


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


Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/show/{show}', [ShowController::class, 'show'])->name('show');
Route::get('/index/create/post', [CreateController::class, 'create'])->name('index.create');
Route::post('/index/create/post', [CreateController::class, 'store'])->name('index.store');
Route::get('/show/{index}/edit', [EditController::class, 'edit'])->name('index.edit');
Route::put('/show/{index}/edit', [EditController::class, 'update']);
Route::delete('show/{index}', [DestroyController::class, 'destroy']);







<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
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


Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/creaprodotto', [ProductController::class, 'creaprodotto'])->name('creaprodotto');
Route::post('/prodottocreato', [ProductController::class, 'prodottocreato'])->name('prodottocreato');

Route::get('/listaprodotti', [ProductController::class, 'listaprodotti'])->name('listaprodotti');

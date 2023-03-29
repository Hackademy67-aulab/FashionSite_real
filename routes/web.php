<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ShopController;
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


Route::get('/creanegozio', [ShopController::class, 'create'])->name('creanegozio');
Route::post('/negoziocreato', [ShopController::class, 'store'])->name('negoziocreato');
Route::get('/listanegozi', [ShopController::class, 'index'])->name('listanegozi');

Route::get('/modificanegozi{shop}', [ShopController::class, 'edit'])->name('modificanegozi');
Route::put('/negoziomodificato{shop}', [ShopController::class, 'update'])->name('negoziomodificato');

Route::delete('/negoziocancellato{shop}', [ShopController::class, 'destroy'])->name('negoziocancellato');


Route::get('/profiloutente', [PublicController::class, 'profile'])->name('profiloutente');
Route::get('/profilocancellato', [PublicController::class, 'destroy'])->name('profilocancellato');

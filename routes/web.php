<?php

use App\Http\Controllers\MainShopController;
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

Route::get('/', [MainShopController::class, 'index'])->name('home');

//Shop routes
Route::get('/produit/{id}', [MainShopController::class, 'produit'])->name('details_produit');
Route::get('/categorie/{id}', [MainShopController::class, 'viewByCategory'])->name('view_categorie');

<?php

use App\Http\Controllers\ProdutoController;
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
    return view('entrada');
});

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
//Route::get('/produto/inserir', [ProdutoController::class, 'criar']);
Route::get('/produto/criar', [ProdutoController::class, 'criar'])->name('produto/criar');
Route::get('/produto/ver/{id}', [ProdutoController::class, 'ver'])->name('produto/ver');

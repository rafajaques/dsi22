<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuariosController;
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
Route::get('/produto/ver/{prod}', [ProdutoController::class, 'ver'])->name('produto/ver');

Route::post('/produto/criar', [ProdutoController::class, 'inserir'])->name('produto/inserir');

Route::get('/produto/editar/{prod}', [ProdutoController::class, 'editar'])->name('produto/editar');
Route::put('/produto/editar/{prod}', [ProdutoController::class, 'editarGravar']);

Route::get('/login', [UsuariosController::class, 'index'])->name('usuario.index');

Route::post('/login', [UsuariosController::class, 'login'])->name('usuario.login');

Route::get('/logout', [UsuariosController::class, 'logout'])->name('usuario.logout');
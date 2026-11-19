<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('consulta1', [ConsultaController::class,'consulta1'])->name('api.v1.consulta1.index');
Route::get('consulta2', [ConsultaController::class,'consulta2'])->name('api.v1.consulta2.index');
Route::get('consulta3', [ConsultaController::class,'consulta3'])->name('api.v1.consulta3.index');
Route::get('consulta4', [ConsultaController::class,'consulta4'])->name('api.v1.consulta4.index');
Route::get('consulta5', [ConsultaController::class,'consulta5'])->name('api.v1.consulta5.index');
Route::get('consulta6', [ConsultaController::class,'consulta6'])->name('api.v1.consulta6.index');
Route::get('consulta7', [ConsultaController::class,'consulta7'])->name('api.v1.consulta7.index');
Route::get('consulta8', [ConsultaController::class,'consulta8'])->name('api.v1.consulta8.index');




Route::get('clientes/list', [ClienteController::class, 'index'])->name('api.v1.clientes.index');
Route::post('clientes/store', [ClienteController::class, 'salida'])->name('api.v1.clientes.store');
Route::get('clientes/{id}', [ClienteController::class, 'show'])->name('api.v1.clientes.show');
Route::put('clientes/{clientes}', [ClienteController::class, 'update'])->name('api.v1.clientes.update');
Route::delete('clientes/{clientes}', [ClienteController::class, 'destroy'])->name('api.v1.clientes.destroy');

Route::get('productos/list', [ProductoController::class, 'index'])->name('api.v1.productos.index');
Route::post('productos/store', [ProductoController::class, 'salida'])->name('api.v1.productos.store');
Route::get('productos/{id}', [ProductoController::class, 'show'])->name('api.v1.productos.show');
Route::put('productos/{productos}', [ProductoController::class, 'update'])->name('api.v1.productos.update');
Route::delete('productos/{productos}', [ProductoController::class, 'destroy'])->name('api.v1.productos.destroy');

Route::get('pedidos/list', [PedidoController::class, 'index'])->name('api.v1.pedidos.index');
Route::post('pedidos/store', [PedidoController::class, 'salida'])->name('api.v1.pedidos.store');
Route::get('pedidos/{id}', [PedidoController::class, 'show'])->name('api.v1.pedidos.show');
Route::put('pedidos/{pedidos}', [PedidoController::class, 'update'])->name('api.v1.pedidos.update');
Route::delete('pedidos/{pedidos}', [PedidoController::class, 'destroy'])->name('api.v1.pedidos.destroy');






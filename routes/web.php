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
    return view('auth.login');
});

Route::resource('pedidos', 'App\Http\Controllers\PedidoController');

Route::resource('tickets', 'App\Http\Controllers\TicketController');

Route::resource('vendedores', 'App\Http\Controllers\VendedorController');

Route::get('pedido/etiqueta/{id}', [App\Http\Controllers\PedidoController::class, 'etiquetas'] )->name('pedido.etiqueta') ;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('panel');
});

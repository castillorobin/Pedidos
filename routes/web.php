<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\Pedido;
use App\Models\Vendedor;
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

Route::resource('tipos', 'App\Http\Controllers\TipoController');

Route::resource('estados', 'App\Http\Controllers\EstadoController');

Route::resource('rutas', 'App\Http\Controllers\RutaController');

Route::get('pedido/etiqueta/{id}', [App\Http\Controllers\PedidoController::class, 'etiquetas'] )->name('pedido.etiqueta') ;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        $pedidos= Pedido::select("*")
        ->whereDate('created_at', Carbon::today())
        ->get();
        $vendedores = Vendedor::all();
        return view('dash.index', ['pedidos' => $pedidos], ['vendedores' => $vendedores]);
    })->name('panel');
});

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

Route::resource('remunerars', 'App\Http\Controllers\RemunerarController');

Route::resource('repartidores', 'App\Http\Controllers\RepartidorController');

Route::resource('pagos', 'App\Http\Controllers\PagoController');

Route::get('pedido/etiqueta/{id}', [App\Http\Controllers\PedidoController::class, 'etiquetas'] )->name('pedido.etiqueta') ;

Route::get('remunerar/generar/', [App\Http\Controllers\RemunerarController::class, 'generars'] )->name('remunerar.generar') ;

Route::get('recolectas', [App\Http\Controllers\TicketController::class, 'recolectas'] ) ;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        $pedidos= Pedido::all();
       
        $vendedores = Vendedor::all();
        $casilleros= Pedido::select("*")
        ->where('tipo', 'Casillero')
        ->get();
        $ctotal = $casilleros->count();

        $personalizados= Pedido::select("*")
        ->where('tipo', 'Personalizado')
        ->get();
        $ptotal = $personalizados->count();

        $puntofijo= Pedido::select("*")
        ->where('tipo', 'Punto Fijo')
        ->get();
        $ftotal = $puntofijo->count();
     //   return view('dash.index', ['pedidos' => $pedidos], ['vendedores' => $vendedores], ['casilleros' => $casilleros]);
        return view('dash.index', ['pedidos' => $pedidos, 'vendedores' => $vendedores, 'ctotal' => $ctotal, 'ptotal' => $ptotal, 'ftotal' => $ftotal]);
    })->name('panel');
});

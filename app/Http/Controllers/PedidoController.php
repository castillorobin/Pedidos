<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
//Carbon::setLocale('es');
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Vendedor;
use App\Models\Tipo;
use App\Models\Ruta;
use App\Models\Estado;
use App\Models\Repartidor;
 
use PDF; 

class PedidoController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastid = Pedido::latest('id')->first();
        $uid= $lastid->id + 1;
        $pedidos = Pedido::all();
        setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        $tipos = Tipo::all();
        $rutas = Ruta::all();
        $estados = Estado::all();
        $repartidores = Repartidor::all();
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        //return view('pedido.index')->with('pedidos', $pedidos);

        return view('pedido.index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'tipos'=>$tipos, 'rutas'=>$rutas, 'estados'=>$estados, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid]);
  
    }

    public function etiquetas($id)
    {
        $pedido = Pedido::find($id);
        $pdf = PDF::loadView('pedido.etiqueta', ['pedido'=>$pedido]);
        //return view('pedido.etiqueta')->with('pedido', $pedido);
        return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        $tipos = Tipo::all();
        $rutas = Ruta::all();
        $estados = Estado::all();
        $repartidores = Repartidor::all();
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");

        return view('pedido.create')->with(['vendedores'=>$vendedores, 'tipos'=>$tipos, 'rutas'=>$rutas, 'estados'=>$estados, 'date'=>$date, 'repartidores'=>$repartidores]);

        //return view('pedido.create')->with('vendedores', $vendedores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $lastid = Pedido::latest('id')->first();
        $uid= $lastid->id + 1;
        $pedido = new Pedido();
        $pedidos = Pedido::all();
        $pedido->vendedor = $request->get('comer');
        $pedido->destinatario = $request->get('desti');
        $pedido->telefono = $request->get('telefono');
        $pedido->direccion = $request->get('direccion');
        $pedido->fecha_entrega = $request->get('fentrega');
        $pedido->precio = $request->get('precio');
        $pedido->envio = $request->get('envio');
        $pedido->total = $request->get('total');
        $pedido->estado = $request->get('estado');
        $pedido->pagado = $request->get('pagado');
        $pedido->servicio = $request->get('servicio');
        $pedido->tipo = $request->get('tenvio');
        $pedido->nota = $request->get('nota');
        $pedido->ingresado = $request->get('ingresado');
        $pedido->agencia = $request->get('agencia');
        $pedido->repartidor = $request->get('repartidor');
        $pedido->ruta = $request->get('ruta');
        //$pedidos->foto = $request->get('foto');
        $pedido->save();
 
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        $vendedores = Vendedor::all();
        $repartidores = Repartidor::all();
        return view('/pedido/index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid]);
       //return redirect('/pedido/etiqueta')->with('id', $pedidos->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);
        return view('pedido.ver')->with('pedido', $pedido);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        return view('pedido.edit')->with('pedido', $pedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedido =  Pedido::find($id) ;
        $pedido->vendedor = $request->get('vende');
        $pedido->direccion = $request->get('dire');
        $pedido->telefono = $request->get('tele');
        $pedido->fecha_entrega = $request->get('fech');
        $pedido->tipo = $request->get('tipo');
        $pedido->precio = $request->get('precio');
        $pedido->envio = $request->get('envio');
        $pedido->total = $request->get('total');
        $pedido->repartidor = $request->get('repa');
        $pedido->ruta = $request->get('ruta');
        $pedido->estado = $request->get('estado');
        $pedido->nota = $request->get('nota');
        $pedido->save();
        return redirect('/pedidos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
        return redirect('/pedidos');
    }
}

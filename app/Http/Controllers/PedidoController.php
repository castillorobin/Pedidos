<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
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
        $lastid = Pedido::latest('id')->first();
        $uid= $lastid->id + 1;
        setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        $tipos = Tipo::all();
        $rutas = Ruta::all();
        $estados = Estado::all();
        $repartidores = Repartidor::all();
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");

        return view('pedido.create')->with(['vendedores'=>$vendedores, 'tipos'=>$tipos, 'rutas'=>$rutas, 'estados'=>$estados, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid]);

        //return view('pedido.create')->with('vendedores', $vendedores);
    }

    public function desdeenvio()
    {
        $lastid = Pedido::latest('id')->first();
        $uid= $lastid->id + 1;
        setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        $tipos = Tipo::all();
        $rutas = Ruta::all();
        $estados = Estado::all();
        $repartidores = Repartidor::all();
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");

        return view('pedido.denvio')->with(['vendedores'=>$vendedores, 'tipos'=>$tipos, 'rutas'=>$rutas, 'estados'=>$estados, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid]);

        //return view('pedido.create')->with('vendedores', $vendedores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastid = Pedido::latest('id')->first();
        $uid= $lastid->id + 1;
        $pedido = new Pedido();
        
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
        $pedidos = Pedido::all();
        return view('/pedido/index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid]);
       //return redirect('/pedido/etiqueta')->with('id', $pedidos->id);

    }


    public function filtrar(Request $request)
    {
        
        $lastid = Pedido::latest('id')->first();
        $uid= $lastid->id + 1;
        $pedido = $request->get('filtrodia');
        //$Agenda = Agenda::where('nombres','like',"%$nombre%")->paginate(5); Pedido::where('tipo','like',"%$pedido%");
        
        $pedidos = Pedido::whereDate('created_at', $pedido)->get();
        //Filter::make('By Creation date', 'created_at')->filterAs('date')->format('d/m/Y')->mask('00/00/0000'),



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
      // return view('pedido.index', compact('pedidos'));
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
        $repartidores = Repartidor::all();
        $vendedores = Vendedor::all();
        $pedido = Pedido::find($id);
        return view('pedido.edit')->with(['pedido'=>$pedido, 'vendedores'=>$vendedores, 'repartidores'=>$repartidores]);
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
        $lastid = Pedido::latest('id')->first();
        $uid= $lastid->id + 1;
        $pedido = Pedido::find($id) ;
        
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

        $archivo = $request->file('foto');
        //$nombre =  $archivo->getClientOriginalName();

        //$pedido->foto = $request->file('foto')->getClientOriginalName() ;
        $fileName = $archivo->getClientOriginalName();
        $pedido->foto = $fileName;

        //$request->file('foto')->store('public');
        $pedido->save();
  
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        $vendedores = Vendedor::all();
        $repartidores = Repartidor::all();
        $pedidos = Pedido::all();
        return view('/pedido/index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid]);
       //return redirect('/pedido/etiqueta')->with('id', $pedidos->id);

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

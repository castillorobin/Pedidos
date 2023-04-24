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
use Illuminate\Support\Str;
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
        $rutaf='seleccionar';
        $pedidof='1970-01-01';
        $repaf='';
         $last = Pedido::latest('id')->first();
        $lastid = $last;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
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

        return view('pedido.index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'tipos'=>$tipos, 'rutas'=>$rutas, 'estados'=>$estados, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid, 'pedidof'=>$pedidof, 'rutaf'=>$rutaf, 'repaf'=>$repaf]);
  
    }

    public function etiquetas($id)
    {
        $pedido = Pedido::find($id);
        $pdf = PDF::loadView('pedido.etiqueta', ['pedido'=>$pedido]);
        //return view('pedido.etiqueta')->with('pedido', $pedido);
        
        return $pdf->stream();
    }

    public function listadia($pedidof, $rutaf, $repaf)
    {
    
        $pedidos = Pedido::whereDate('created_at', $pedidof)->get();

        if ($rutaf == 'seleccionar' && $repaf =='seleccionar' && $pedidof != '1970-01-01'){
            $pedidos = Pedido::whereDate('created_at', $pedidof)->get();
        }
        
        elseif($rutaf != 'seleccionar' && $repaf =='seleccionar' && $pedidof != '1970-01-01'){
            $pedidos = Pedido::whereDate('created_at', $pedidof)->where('ruta', $rutaf)->get();
        }
        
        elseif($rutaf == 'seleccionar' && $repaf !='seleccionar' && $pedidof != '1970-01-01'){
            $pedidos = Pedido::whereDate('created_at', $pedidof)->where('repartidor', $repaf)->get();
            
        }
        
        elseif($pedidof == '1970-01-01' && $repaf =='seleccionar' && $rutaf != 'seleccionar'){
           // $pedidos = Pedido::where('ruta', $rutaf)->get();
           $pedidos = Pedido::where('ruta', $rutaf)->get();
        }
        
        elseif($pedidof == '1970-01-01' && $repaf !='seleccionar' && $rutaf != 'seleccionar'){
            $pedidos = Pedido::where('ruta', $rutaf)->where('repartidor', $repaf)->get();
        }
        
        elseif($pedidof != '1970-01-01' && $repaf =='seleccionar' && $rutaf != 'seleccionar'){
            $pedidos = Pedido::whereDate('created_at', $pedidof)->where('ruta', $rutaf);
        
        }elseif($pedidof == '1970-01-01' && $rutaf =='seleccionar' && $repaf !='seleccionar'){
            $pedidos = Pedido::where('repartidor', $repaf)->get();
        }

        
        
        
        
        else{
            $pedidos = Pedido::whereDate('created_at', $pedidof)->where('ruta', $rutaf)->where('repartidor', $repaf)->get();
        }

    $repar=$pedidos[0]->repartidor;
    $rutat=$pedidos[0]->ruta;
    $cuantos= count($pedidos);
    $totalentre=0;
    $numentre=0;
    $totalrepro=0;
    $numrepro=0;
    foreach($pedidos as $pedido){
        if($pedido->estado == 'Entregado'){
            $totalentre = $totalentre + $pedido->precio;
            $numentre = $numentre + 1;
        }
        if($pedido->estado == 'Reprogramado'){
            $totalrepro = $totalrepro + $pedido->precio;
            $numrepro = $numrepro + 1;
        }
    }

        $pdf = PDF::loadView('pedido.lista', ['pedidos'=>$pedidos, 'repar'=>$repar, 'rutat'=>$rutat, 'cuantos'=>$cuantos, 'totalentre'=>$totalentre, 'numentre'=>$numentre, 'totalrepro'=>$totalrepro, 'numrepro'=>$numrepro]);
        //return view('pedido.etiqueta')->with('pedido', $pedido);
        $pdf->setPaper('letter', 'landscape');
        return $pdf->stream();

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last = Pedido::latest('id')->first();
        $lastid = $last;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
       
        setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        $tipos = Tipo::all();
        $rutas = Ruta::all();
        $estados = Estado::all();
        $repartidores = Repartidor::all();
        $fecha = Carbon::today();
        //$date = $date->format('l jS F Y');
        $fecha = strftime("%A %d de %B %Y");

        return view('pedido.create')->with(['vendedores'=>$vendedores, 'tipos'=>$tipos, 'rutas'=>$rutas, 'estados'=>$estados, 'fecha'=>$fecha, 'repartidores'=>$repartidores, 'uid'=>$uid]);

        //return view('pedido.create')->with('vendedores', $vendedores);
    }
 
    public function desdeenvio()
    {
        $last = Pedido::latest('id')->first();
        $lastid = $last;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
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
        $last = Pedido::latest('id')->first();
        $lastid = $last;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        $rutaf='seleccionar';
        $pedidof='1970-01-01';
        $repaf='';
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

        if($request->hasFile('foto')){
            
            $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $pedido->foto = $nombreimagen;
            $ruta = public_path("imgs/fotos/");
            $imagen->move($ruta,$nombreimagen);

        }
        if($request->hasFile('foto2')){
            
            $imagen = $request->file("foto2");
            $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $pedido->foto2 = $nombreimagen;
            $ruta = public_path("imgs/fotos/");
            $imagen->move($ruta,$nombreimagen);

        }



        $pedido->save();
  
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        $vendedores = Vendedor::all();
        $repartidores = Repartidor::all();
        $pedidos = Pedido::all();
        return view('/pedido/index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid, 'pedidof'=>$pedidof, 'rutaf'=>$rutaf, 'repaf'=>$repaf]);
       //return redirect('/pedido/etiqueta')->with('id', $pedidos->id);

    }


    public function filtrar(Request $request)
    {
        
        $last = Pedido::latest('id')->first();
        $lastid = $last;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        $pedidofe = $request->get('filtrodia');
        $pedidof = date("Y-m-d", strtotime($pedidofe));
        $rutaf = $request->get('route');
        $repaf = $request->get('filtrorepa');
        //$Agenda = Agenda::where('nombres','like',"%$nombre%")->paginate(5); Pedido::where('tipo','like',"%$pedido%");
        //
        //$pedidos = Pedido::whereDate('created_at', $pedido)->get();

     //   $results = User::where($matchThese)
 //   ->orWhere($orThose)
 //   ->get();
 
        if ($rutaf == 'seleccionar' && $repaf =='seleccionar' && $pedidof != '1970-01-01'){
            $pedidos = Pedido::whereDate('created_at', $pedidof)->get();
        }
        
        elseif($rutaf != 'seleccionar' && $repaf =='seleccionar' && $pedidof != '1970-01-01'){
            $pedidos = Pedido::whereDate('created_at', $pedidof)->where('ruta', $rutaf)->get();
        }
        
        elseif($rutaf == 'seleccionar' && $repaf !='seleccionar' && $pedidof != '1970-01-01'){
            $pedidos = Pedido::whereDate('created_at', $pedidof)->where('repartidor', $repaf)->get();
            
        }
        
        elseif($pedidof == '1970-01-01' && $repaf =='seleccionar' && $rutaf != 'seleccionar'){
           // $pedidos = Pedido::where('ruta', $rutaf)->get();
           $pedidos = Pedido::where('ruta', $rutaf)->get();
        }
        
        elseif($pedidof == '1970-01-01' && $repaf !='seleccionar' && $rutaf != 'seleccionar'){
            $pedidos = Pedido::where('ruta', $rutaf)->where('repartidor', $repaf)->get();
        }
        
        elseif($pedidof != '1970-01-01' && $repaf =='seleccionar' && $rutaf != 'seleccionar'){
            $pedidos = Pedido::whereDate('created_at', $pedidof)->where('ruta', $rutaf);
        
        }elseif($pedidof == '1970-01-01' && $rutaf =='seleccionar' && $repaf !='seleccionar'){
            $pedidos = Pedido::where('repartidor', $repaf)->get();
        }

        
        
        
        
        else{
            $pedidos = Pedido::whereDate('created_at', $pedidof)->where('ruta', $rutaf)->where('repartidor', $repaf)->get();
        }

        //$pedidof = '1970-01-01';
        //$pedidos = Pedido::where('ruta', $rutaf)->get();

        //Filter::make('By Creation date', 'created_at')->filterAs('date')->format('d/m/Y')->mask('00/00/0000'),

        //setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        $tipos = Tipo::all();
        $rutas = Ruta::all();
        $estados = Estado::all();
        $repartidores = Repartidor::all();
        $date = $pedidof;
        //$date = $date->format('l jS F Y');
        //$date = strftime("%A %d de %B %Y");
        //return view('pedido.index')->with('pedidos', $pedidos);

        return view('pedido.index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'tipos'=>$tipos, 'rutas'=>$rutas, 'estados'=>$estados, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid, 'pedidof'=>$pedidof, 'rutaf'=>$rutaf, 'repaf'=>$repaf]);
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
        $last = Pedido::latest('id')->first();
        $lastid = $last;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        $pedido = Pedido::find($id);
        $rutaf='seleccionar';
        $pedidof='1970-01-01';
        $repaf='';
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

      

        if($request->hasFile('foto')){
           
            if($pedido->foto==''){
                $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
            $pedido->foto = $nombreimagen;
            $ruta = public_path("imgs/fotos/");
            $imagen->move($ruta,$nombreimagen);
            }elseif($pedido->foto2==''){
                $imagen = $request->file("foto");
                $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
                $pedido->foto2 = $nombreimagen;
                $ruta = public_path("imgs/fotos/");
                $imagen->move($ruta,$nombreimagen);
            }elseif($pedido->foto3==''){
                $imagen = $request->file("foto");
                $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
                $pedido->foto3 = $nombreimagen;
                $ruta = public_path("imgs/fotos/");
                $imagen->move($ruta,$nombreimagen);
            }elseif($pedido->foto4==''){
                $imagen = $request->file("foto");
                $nombreimagen = Str::slug(time()).".".$imagen->guessExtension();
                $pedido->foto4 = $nombreimagen;
                $ruta = public_path("imgs/fotos/");
                $imagen->move($ruta,$nombreimagen);
            }
            
            
            
            

        }





        $pedido->save();
  
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        $vendedores = Vendedor::all();
        $repartidores = Repartidor::all();
        $pedidos = Pedido::all();
        return view('/pedido/index')->with(['pedidos'=>$pedidos, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid, 'pedidof'=>$pedidof, 'rutaf'=>$rutaf, 'repaf'=>$repaf]);
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

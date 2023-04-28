<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Recolecta;
use App\Models\Vendedor;
use App\Models\Repartidor;
class RecolectaController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repartidores = Repartidor::all();
        $vendedores = Vendedor::all();
        $recolectas = Recolecta::all();
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        return view('recolecta.index')->with(['recolectas'=>$recolectas, 'date'=>$date , 'repartidores'=>$repartidores, 'vendedores'=>$vendedores  ]);
    }
 
    public function filtrar(Request $request)
    {
        
        $last = Recolecta::latest('id')->first();
        $lastid = $last->id;
        $uid=0;
        if($lastid < 1){
            $uid=1;
        }else{
            $uid= $lastid + 1;
        }
        $pedidofe = $request->get('filtrodia');
        $pedidof = date("Y-m-d", strtotime($pedidofe));
        $repaf = $request->get('filtrorepa');
       
        if ($repaf =='seleccionar'){
            $recoelctas = Recolecta::whereDate('created_at', $pedidof)->get();
        }
        
        elseif($repaf !='seleccionar' && $pedidof == '1970-01-01'){
            $recoelctas = Recolecta::where('repartidor', $repaf)->get();
        }
        
        elseif($repaf !='seleccionar' && $pedidof != '1970-01-01'){
            $recoelctas = Recolecta::whereDate('created_at', $pedidof)->where('repartidor', $repaf)->get();
            
        }
        
        //setlocale(LC_TIME, "spanish");
        $vendedores = Vendedor::all();
        
       
       
        $repartidores = Repartidor::all();
        $date = $pedidof;
        //$date = $date->format('l jS F Y');
        //$date = strftime("%A %d de %B %Y");
        //return view('pedido.index')->with('pedidos', $pedidos);

        return view('recolecta.index')->with(['recolectas'=>$recoelctas, 'vendedores'=>$vendedores, 'date'=>$date, 'repartidores'=>$repartidores, 'uid'=>$uid, 'pedidof'=>$pedidof, 'repaf'=>$repaf]);
      // return view('pedido.index', compact('pedidos'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $repartidores = Repartidor::all();
        $vendedores = Vendedor::all();
        $recolectas = Recolecta::all();
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        return view('recolecta.create')->with(['recolectas'=>$recolectas, 'date'=>$date , 'repartidores'=>$repartidores, 'vendedores'=>$vendedores  ]);
    } 

    public function store(Request $request)
    {  
        $repartidores = Repartidor::all();
        $vendedores = Vendedor::all();
        $recolecta = new Recolecta();
        $recolectas = Recolecta::all();
        $recolecta->nombre = $request->get('nombre');
        $recolecta->direccion = $request->get('direccion');
        $recolecta->telefono = $request->get('telefono');
        $recolecta->fechaent = $request->get('fechaen');
        $recolecta->repartidor = $request->get('repartidor');
        $recolecta->estado = $request->get('estado');
        $recolecta->nota = $request->get('nota');
        $recolecta->agencia = $request->get('agencia');
        $recolecta->save();
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        return view('recolecta.index')->with(['recolectas'=>$recolectas, 'date'=>$date , 'repartidores'=>$repartidores, 'vendedores'=>$vendedores  ]);

    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Recolecta::find($id);
        $pedido->delete();
        return redirect('/recolectas');
    }
}

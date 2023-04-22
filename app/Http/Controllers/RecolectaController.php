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
        //
    }
}

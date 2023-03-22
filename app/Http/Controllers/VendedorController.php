<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Pedido;
class VendedorController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        return view('vendedor.index')->with(['vendedores'=>$vendedores, 'date'=>$date]);
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
        $vendedores = Vendedor::all();
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        return view('vendedor.create')->with(['vendedores'=>$vendedores, 'date'=>$date, 'uid'=>$uid]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $vendedor = new Vendedor();
        $vendedor->nombre = $request->get('nombre');
        $vendedor->direccion = $request->get('direccion');
        $vendedor->telefono = $request->get('telefono');
        $vendedor->whatsapp = $request->get('whatsapp');
        $vendedor->falta = $request->get('falta');
        $vendedor->fbaja = $request->get('fbaja');
        $vendedor->tipovende = $request->get('tipoven');
        $vendedor->correo = $request->get('correo');
        $vendedor->titular = $request->get('titular');
        $vendedor->banco = $request->get('banco');
        $vendedor->cuenta = $request->get('ncuenta');
        $vendedor->tcuenta = $request->get('tcuenta');
        $vendedor->chivo = $request->get('chivo');
        $vendedor->tmoney = $request->get('tmoney');
        $vendedor->empresa = $request->get('empresa');
        $vendedor->giro = $request->get('giro');
        $vendedor->dui = $request->get('dui');
        $vendedor->niva = $request->get('niva');

        $vendedor->nrc = $request->get('nrc');
        $vendedor->estado = $request->get('estado');
        
                
        $vendedor->save();

        $vendedores = Vendedor::all();
        
        setlocale(LC_TIME, "spanish");
        $date = Carbon::today();
        //$date = $date->format('l jS F Y');
        $date = strftime("%A %d de %B %Y");
        return view('vendedor.index')->with(['vendedores'=>$vendedores, 'date'=>$date]);
    }

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
        $vendedor = Vendedor::find($id);
        return view('vendedor.edit')->with('vendedor', $vendedor);
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
        $vendedor = Vendedor::find($id) ;
        $vendedor->nombre = $request->get('nombre');
        $vendedor->direccion = $request->get('dire');
        $vendedor->telefono = $request->get('tele');
        $vendedor->fecha_ingreso = $request->get('fech');
        $vendedor->tipovende = $request->get('tipov');
        $vendedor->titular = $request->get('titular');
        $vendedor->cuenta = $request->get('cuenta');
        $vendedor->banco = $request->get('banco');
        $vendedor->tcuenta = $request->get('tcuenta');
        $vendedor->save();
        return redirect('/vendedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendedor = Vendedor::find($id);
        $vendedor->delete();
        return redirect('/vendedores');
    }
}

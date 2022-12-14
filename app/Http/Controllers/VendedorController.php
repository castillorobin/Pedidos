<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
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
        return view('vendedor.index')->with('vendedores', $vendedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendedores = Vendedor::all();
        return view('vendedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendedores = new Vendedor();
        $vendedores->nombre = $request->get('nombre');
        $vendedores->direccion = $request->get('dire');
        $vendedores->telefono = $request->get('tele');
        $vendedores->fecha_ingreso = $request->get('fech');
        $vendedores->tipovende = $request->get('tipo');
        $vendedores->titular = $request->get('titular');
        $vendedores->cuenta = $request->get('cuenta');
        $vendedores->banco = $request->get('banco');
        $vendedores->tcuenta = $request->get('tipoc');
                
        $vendedores->save();
        return redirect('/vendedores');
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

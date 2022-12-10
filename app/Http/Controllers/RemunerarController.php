<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Pago;
use App\Models\Detallepago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RemunerarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('remunerar.index')->with('pedidos', $pedidos);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generars(Request $request)
    {
       //$user = Auth::user();
        //$usuario = $user->name;
        $pagares = $request->input('ids');
        $pedidos = Pedido::Find($pagares);
        $total=0;
        foreach($pedidos as $pedido){
            $total += $pedido->precio;
        }

        /*
        foreach($pagares as $pagar){
            $pedidos = Pedido::select("*")
            ->where('id', $pagar)
            ->get();
        }
*/
        return view('remunerar.pagando')->with(['pedidos'=>$pedidos, 'total'=>$total]);
       // return view('remunerar.pagando');
    }

    public function create()
    {
        //return view('remunerar.pagando');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($pedidos)
    {
        $pago = new Pago();
        $detalles = new Detallepago();
        $vendedores = new Pedido();

        $pago->comercio = "Hola";
        $pago->save();
/*
        foreach($pedidos as $pedido){
            $total += $pedido->precio;
        }


        $vendedores->nombre = $request->get('nombre');
        $vendedores->direccion = $request->get('dire');
       
                
        $vendedores->save();
        */
        return redirect('/vendedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ids)
    {
        /*
        $pagares = $ids->input('ids');
        foreach($pagares as $pagar){

        }

        return view('remunerar.pagando')->with('pagares', $pagares);
*/

        

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

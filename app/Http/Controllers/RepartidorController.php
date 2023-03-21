<?php

namespace App\Http\Controllers;

use App\Models\Repartidor;
use Illuminate\Http\Request;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repartidores = Repartidor::all();

        // return view('repartidor.index')->with('repartidores', $repartidores);
           return view('repartidor.index',compact('repartidores'))->with('exito','ok');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $repartidores = Repartidor::all();
        return view('repartidor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
        
        $request->validate([
            'nombre'                => 'required|string|min:5|max:150',
            'direccion'             => 'required|string|min:4|max:300',
            'telefono'              => 'required|string|min:5|max:15',
            'dui'                   => 'required|string|min:4|max:25',
            'nit'                   => 'required|string|min:4|max:25',
            'tipo_contrato'         => 'required|string|min:4|max:100',
            'agencia'               => 'required|string|min:4|max:25',
            'num_seguro'            => 'required|string|min:4|max:100',
            'num_afp'               => 'required|string|min:5|max:20',
            'cargo'                 => 'required|string|min:4|max:50',
            'fecha_de_alta'         => 'required|date',
            //'salario'               => 'required|float',
            'fecha_de_baja'         => 'required|date',
            // 'nota'                  => 'required',
            'tipo_vehiculo'         => 'required|string|min:2|max:35',
            'asigno_unidad'         => 'required|string|min:2|max:5',
            'num_placa'             => 'required|string|min:5|max:25',
            'num_tarjeta'           => 'required|string|min:5|max:25',
            'num_licencia'          => 'required|string|min:5|max:25',
            'foto'                  => 'image|mimes:jpeg,png|max:3000',
        ],[
                 'nombre.required'          => 'El nombre se dejo vacio!'
                ,'nombre.string'            => 'El nombre tiene valor incorrecto!'
                ,'nombre.min'               => 'El nombre debe de tener 5 caracteres como minimo !'
                ,'nombre.max'               => 'El nombre debe de tener 50 caracteres como maximo!'

                ,'direccion.required'       => 'La direccion se dejo vacia!'
                ,'direccion.string'         => 'La direccion tiene valor incorrecto!'
                ,'direccion.min'            => 'La direccion debe de tener 5 caracteres como minimo !'
                ,'direccion.max'            => 'La direccion debe de tener 300 caracteres como maximo!'

                ,'telefono.required'        => 'El telefono se dejo vacio!'
                ,'telefono.string'          => 'El telefono tiene valor incorrecto!'
                ,'telefono.min'             => 'El telefono debe de tener 4 caracteres como minimo !'
                ,'telefono.max'             => 'El telefono debe de tener 15 caracteres como maximo!'


                ,'dui.required'             => 'El dui se dejo vacio!'
                ,'dui.string'               => 'El dui tiene valor incorrecto!'
                ,'dui.min'                  => 'El dui debe de tener 4 caracteres como minimo !'
                ,'dui.max'                  => 'El dui debe de tener 25 caracteres como maximo!'


                ,'nit.required'             => 'El nit se dejo vacio!'
                ,'nit.string'               => 'El nit tiene valor incorrecto!'
                ,'nit.min'                  => 'El nit debe de tener 4 caracteres como minimo !'
                ,'nit.max'                  => 'El nit debe de tener 25 caracteres como maximo!'


                ,'tipo_contrato.required'   => 'El tipo de contrato se dejo vacio o tiene valor incorrecto!'
                ,'tipo_contrato.string'     => 'El tipo de contrato tiene valor incorrecto!'
                ,'tipo_contrato.min'        => 'El tipo de contrato debe de tener 4 caracteres como minimo !'
                ,'tipo_contrato.max'        => 'El tipo de contrato debe de tener 100 caracteres como maximo!'



                ,'agencia.required'         => 'La agencia se dejo vacia!'
                ,'agencia.string'           => 'La agencia tiene valor incorrecto!'
                ,'agencia.min'              => 'La agencia debe de tener 4 caracteres como minimo !'
                ,'agencia.max'              => 'La agencia debe de tener 25 caracteres como maximo!'

                ,'num_seguro.required'      => 'El numero de seguro se dejo vacio!'
                ,'num_seguro.string'        => 'El numero de seguro tiene valor incorrecto!'
                ,'num_seguro.min'           => 'El numero de seguro debe de tener 4 caracteres como minimo !'
                ,'num_seguro.max'           => 'El numero de seguro debe de tener 100 caracteres como maximo!'

                ,'num_afp.required'         => 'El numero de afp se dejo vacio!'
                ,'num_afp.string'           => 'El numero de afp tiene valor incorrecto!'
                ,'num_afp.min'              => 'El numero de afp debe de tener 4 caracteres como minimo !'
                ,'num_afp.max'              => 'El numero de afp debe de tener 20 caracteres como maximo!'

                ,'cargo.required'           => 'El cargo se dejo vacia!'
                ,'cargo.string'             => 'El cargo tiene valor incorrecto!'
                ,'cargo.min'                => 'El cargo debe de tener 4 caracteres como minimo !'
                ,'cargo.max'                => 'El cargo debe de tener 50 caracteres como maximo!'

                ,'fecha_de_alta.required'   => 'La fecha de alta se dejo vacia!'
                ,'fecha_de_alta.date'       => 'La fecha de alta de afp tiene valor incorrecto!'
                ,'fecha_de_alta.min'        => 'La fecha de alta de afp debe de tener 4 caracteres como minimo !'
                ,'fecha_de_alta.max'        => 'La fecha de alta de afp debe de tener 20 caracteres como maximo!'

                ,'salario.required'         => 'El salario se dejo vacio!'
                ,'salario.float'            => 'El salario tiene valor incorrecto!'
                // ,'salario.min'              => 'El numero de afp debe de tener 4 caracteres como minimo !'
                // ,'salario.max'              => 'El numero de afp debe de tener 20 caracteres como maximo!'

                ,'fecha_de_baja.required'   => 'La fecha de baja se dejo vacia!'
                ,'fecha_de_baja.date'       => 'La fecha de baja tiene valor incorrecto!'
                // ,'fecha_de_baja.min'        => 'El numero de afp debe de tener 4 caracteres como minimo !'
                // ,'fecha_de_baja.max'        => 'El numero de afp debe de tener 20 caracteres como maximo!'

                // ,'nota'                 => 'La nota se dejo vacia o tiene valor incorrecto!',

                // ,'tipo_vehiculo.required'       => 'El tipo de vehiculo se dejo vacio o tiene valor incorrecto!'
                // ,'tipo_vehiculo.string'         => 'Debe de seleccionar una opcion!'
                ,'tipo_vehiculo.min'            => 'El tipo de vehiculo debe de tener 4 caracteres como minimo !'
                // ,'tipo_vehiculo.max'            => 'El tipo de vehiculo debe de tener 35 caracteres como maximo!'

                // ,'asigno_unidad.required'       => 'La asignacion de unidad se dejo vacia o tiene valor incorrecto!'
                // ,'asigno_unidad.string'         => 'Debe de seleccionar una opcion!'
                ,'asigno_unidad.min'            => 'La asignacion de unidad debe de tener 4 caracteres como minimo !'
                // ,'asigno_unidad.max'            => 'La asignacion de unidad debe de tener 20 caracteres como maximo!'

                ,'num_placa.required'           => 'El numero de placa se dejo vacio!'
                ,'num_placa.string'             => 'El numero de placa tiene valor incorrecto!'
                ,'num_placa.min'                => 'El numero de placa debe de tener 4 caracteres como minimo !'
                ,'num_placa.max'                => 'El numero de placa debe de tener 25 caracteres como maximo!'

                ,'num_tarjeta.required'         => 'El numero de tarjeta se dejo vacio!'
                ,'num_tarjeta.string'           => 'El numero de tarjeta tiene valor incorrecto!'
                ,'num_tarjeta.min'              => 'El numero de tarjeta debe de tener 4 caracteres como minimo !'
                ,'num_tarjeta.max'              => 'El numero de tarjeta debe de tener 25 caracteres como maximo!'
    
                ,'num_licencia.required'        => 'El numero de licencia se dejo vacio!'
                ,'num_licencia.string'          => 'El numero de licencia tiene valor incorrecto!'
                ,'num_licencia.min'             => 'El numero de licencia debe de tener 4 caracteres como minimo !'
                ,'num_licencia.max'             => 'El numero de licencia debe de tener 25 caracteres como maximo!'

                ,'foto.image'                   => 'El formato de la imagen es incorrecto, debe de ser imagen!'
                ,'foto.mimes'                   => 'La foto debe de ser formato jpg o png!'
                // ,'foto.max'                     => 'La foto debe de ser formato jpg o png!'
                
            ]);
        

        $repartidores = new Repartidor();

        $repartidores->nombre        = $request->nombre;
        $repartidores->direccion     = $request->direccion;
        $repartidores->telefono      = $request->telefono;
        $repartidores->dui           = $request->dui;
        $repartidores->nit           = $request->nit;
        $repartidores->tipo_contrato = $request->tipo_contrato;
        $repartidores->agencia       = $request->agencia;
        $repartidores->num_seguro    = $request->num_seguro;
        $repartidores->num_afp       = $request->num_afp;
        $repartidores->cargo         = $request->cargo;
        $repartidores->fecha_de_alta = $request->fecha_de_alta;
        $repartidores->salario       = $request->salario;
        $repartidores->fecha_de_baja = $request->fecha_de_baja;
        $repartidores->nota          = $request->nota;
        $repartidores->tipo_vehiculo = $request->tipo_vehiculo;
        $repartidores->asigno_unidad = $request->asigno_unidad;
        $repartidores->num_placa     = $request->num_placa;
        $repartidores->num_tarjeta   = $request->num_tarjeta;
        $repartidores->num_licencia  = $request->num_licencia;
        
        if ($request->hasFile('foto')) {
            $repartidores->foto = $request->file('foto')->store('uploads','public');
        }
        
        $repartidores->save();


        
        return redirect('/repartidores')->with('agregado','ok');
    } catch (ValidationException $exception) {
        return redirect()->back()->withErrors($exception->validator, 'repartidores')->withInput()->with('agregado', 'error');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $repartidor = Repartidor::where('id', $id)->first();

        return response()->json($repartidor);

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
        return view('repartidor.create');
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
        
        
        $repartidor = Repartidor::findOrFail($request->id);
        $repartidor->nombre        = $request->nombre;
        $repartidor->direccion     = $request->dire;
        $repartidor->telefono      = $request->tele;
        $repartidor->dui           = $request->dui;
        $repartidor->nit           = $request->nit;
        $repartidor->tipo_contrato = $request->tipo_contrato;
        $repartidor->agencia       = $request->agencia;
        $repartidor->num_seguro    = $request->num_seguro;
        $repartidor->num_afp       = $request->num_afp;
        $repartidor->cargo         = $request->cargo;
        $repartidor->fecha_de_alta = $request->fecha_de_alta;
        $repartidor->salario       = $request->salario;
        $repartidor->fecha_de_baja = $request->fecha_de_baja;
        $repartidor->nota          = $request->nota;
        $repartidor->tipo_vehiculo = $request->tipo_vehiculo;
        $repartidor->asigno_unidad = $request->asigno_unidad;
        $repartidor->num_placa     = $request->num_placa;
        $repartidor->num_tarjeta   = $request->num_tarjeta;
        $repartidor->num_licencia  = $request->num_licencia;
        $repartidor->foto          = $request->foto;
        $repartidor->save();

        return redirect('/repartidores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $repartidor = Repartidor::destroy($id);

        return redirect('/repartidores')->with('eliminar','ok');   
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket; 
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticket.index')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tickets = new Ticket();
        $tickets->vendedor = $request->get('vende');
        $tickets->casillero = $request->get('casi');
        $tickets->personalizado = $request->get('perso');
        $tickets->punto_fijo = $request->get('pfijo');
        $tickets->fecha = $request->get('fecha');
        $tickets->total = $request->get('totalprecio');

        
        $tickets->save();
        return view('/ticket/imprimir')->with('tickets', $tickets);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * ** */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('ticket.ver')->with('ticket', $ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('ticket.edit')->with('ticket', $ticket);
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
        $tickets =  Ticket::find($id) ;
        $tickets->vendedor = $request->get('vende');
        $tickets->casillero = $request->get('casi');
        $tickets->personalizado = $request->get('perso');
        $tickets->punto_fijo = $request->get('pfijo');
        $tickets->fecha = $request->get('fecha');
        $tickets->total = $request->get('totalprecio');

        
        $tickets->save();
        return redirect('/tickets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect('/tickets');
    }
}

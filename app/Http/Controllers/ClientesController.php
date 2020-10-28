<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Disenios;

class ClientesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::select()->get();

        return view('Clientes.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::select()->get();
        return view('Clientes.create')->with('clientes', $clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Clientes::create($datos);
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Clientes::find($id);
        return view('Clientes.read')->with('clientes', $clientes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
        $clientes = Clientes::find($id);
        return view('Clientes.edit')->with('clientes', $clientes);
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
        $datos = $request->all();
        $clientes = Clientes::find($id);
        $clientes->update($datos);
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $clientes = Clientes::find($id);
             $clientes->delete();
        return redirect('/clientes');
    }
}

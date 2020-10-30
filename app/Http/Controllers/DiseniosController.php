<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Disenios;

class DiseniosController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disenios = Disenios::select()->get();

        return view('Disenios.index')->with('disenios',$disenios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disenios = Disenios::select()->get();
        return view('Disenios.create')->with('disenios', $disenios);
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
        Disenios::create($datos);
        return redirect('/disenios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disenios = Disenios::find($id);
        return view('Disenios.read')->with('disenios', $disenios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
        $disenios = Disenios::find($id);
        return view('Disenios.edit')->with('disenios', $disenios);
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
        $disenios = Disenios::find($id);
        $disenios->update($datos);
        return redirect('/disenios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $disenios = Disenios::find($id);
             $disenios->delete();
        return redirect('/disenios');
    }

    public function DiseniosCliente($idCliente)
    {
          
        $disenios = Disenios::where('idcliente',$idCliente);
        return view('Cliente.disenios')->with('disenios', $disenios);
    }
}

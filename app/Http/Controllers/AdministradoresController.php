<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administradores;

class AdministradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradores = Administradores::select()->get();

        return view('Administradores.index')->with('administradores',$administradores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administradores = Administradores::select()->get();
        return view('Administradores.create')->with('administradores', $administradores);
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
        Administradores::create($datos);
        return redirect('/administradores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administradores = Administradores::find($id);
        return view('Administradores.read')->with('administradores', $administradores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
        $administradores = Administradores::find($id);
        return view('Administradores.edit')->with('administradores', $administradores);
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
        $administradores = Administradores::find($id);
        $administradores->update($datos);
        return redirect('/administradores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $administradores = Administradores::find($id);
             $administradores->delete();
        return redirect('/administradores');
    }
}

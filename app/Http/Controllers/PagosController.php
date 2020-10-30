<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagos;

class PagosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = Pagos::select()->get();

        return view('Pagos.index')->with('pagos',$pagos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagos = Pagos::select()->get();
        return view('Pagos.create')->with('pagos', $pagos);
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
        Pagos::create($datos);
        return redirect('/pagos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagos = Pagos::find($id);
        return view('Pagos.read')->with('pagos', $pagos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
        $pagos = Pagos::find($id);
        return view('Pagos.edit')->with('pagos', $pagos);
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
        $pagos = Pagos::find($id);
        $pagos->update($datos);
        return redirect('/pagos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $pagos = Pagos::find($id);
             $pagos->delete();
        return redirect('/pagos');
    }
}

<?php

namespace App\Http\Controllers;

use App\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Gasto::all();
        return view ('gasto.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gasto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'fecha'=>'required'
        ]);

        $datos = new Gasto();
            $datos->nombre = $request->nombre;
            $datos->descripcion = $request->descripcion;
            $datos->fecha = $request->fecha;
            $datos->monto = $request->monto;
        $datos->save();
        $datos=Gasto::all();
        return view('gasto.index', compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function show(Gasto $gasto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function edit(Gasto $gasto)
    {
        return view('gasto.edit',compact('gasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'fecha'=>'required'
        ]);
            $gasto->nombre = $request->nombre;
            $gasto->descripcion = $request->descripcion;
            $gasto->fecha = $request->fecha;
            $gasto->monto = $request->monto;
           
        $gasto->save();
        $datos=Gasto::all();
        return view('gasto.index', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        $datos=Contacto::all();
        return view('contacto.index', compact('datos'));
    }
}

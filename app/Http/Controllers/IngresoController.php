<?php

namespace App\Http\Controllers;

use App\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Ingreso::all();
        return view ('ingreso.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso.create');
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

        $datos = new Ingreso();
            $datos->nombre = $request->nombre;
            $datos->descripcion = $request->descripcion;
            $datos->fecha = $request->fecha;
            $datos->monto = $request->monto;
        $datos->save();
        $datos=Ingreso::all();
        return view('ingreso.index', compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        return view('ingreso.edit',compact('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'fecha'=>'required'
        ]);
            $ingreso->nombre = $request->nombre;
            $ingreso->descripcion = $request->descripcion;
            $ingreso->fecha = $request->fecha;
            $ingreso->monto = $request->monto;
           
        $ingreso->save();
        $datos=ingreso::all();
        return view('ingreso.index', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        $ingreso->delete();
        $datos=Contacto::all();
        return view('contacto.index', compact('datos'));
    }
}

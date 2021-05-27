<?php

namespace App\Http\Controllers;

use App\Models\Habilidad;
use Illuminate\Http\Request;

class Habilidades extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$habilidades = Habilidad::all();
        $habilidades = Habilidad::orderBy('id', 'desc')->get();
        //$habilidades = Habilidad::where('id', '<', '50')->get();
        //$habilidades = Habilidad::select('nombre, orden')->get();
        return view('habilidades.listado', [
            'habilidades' => $habilidades
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habilidades.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $habilidad = new Habilidad($request->all());
        //dd($habilidad);
        $habilidad->save();
        return redirect()->route('habilidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function show(Habilidad $habilidad)
    {
        return view('habilidades.ver', [
            'habilidad' => Habilidad::findOrFail($habilidad->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Habilidad $habilidad)
    {
        return view('habilidades.editar', [
            'habilidad' => $habilidad
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habilidad $habilidad)
    {
        //dd($request->all());
        $habilidad->fill($request->all());
        $habilidad->save();
        return redirect()->route('habilidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilidad $habilidad)
    {
        $habilidad->delete();
        return redirect()->route('habilidades.index');
    }
}

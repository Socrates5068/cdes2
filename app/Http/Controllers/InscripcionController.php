<?php

namespace App\Http\Controllers;

use App\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscripcions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:10|max:50',
            'ci' => 'required|min:6|max:10',
            'domicilio' => 'required|min:10|max:50',
            'telefono' => 'required|min:5|max:10',
            'profesion' => 'required|min:4|max:50',
            'convocatoria' => 'required',
            'cargo' => 'required',
        ]);

        $inscripcion = new Inscripcion;
        $inscripcion->nombre = $request->input('nombre');
        $inscripcion->ci = $request->input('ci');
        $inscripcion->domicilio = $request->input('domicilio');
        $inscripcion->telefono = $request->input('telefono');
        $inscripcion->profesion = $request->input('profesion');
        $inscripcion->convocatoria = $request->input('convocatoria');
        $inscripcion->cargo = $request->input('cargo');
        $inscripcion->save();

        //return view('inscripcions.create');
        return redirect()
            ->route('inscripcions.create')
            ->with('flash', 'Usuario inscrito correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

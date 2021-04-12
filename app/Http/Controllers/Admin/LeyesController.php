<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ley;

class LeyesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leyes = Ley::all();

        return view('admin.leyes.index', compact('leyes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.leyes.create');
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
            'nombre' => 'required|min:3',
            'categoria' =>'required',
            'pdf' => 'required|file|mimes:pdf',
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $name = $file->getClientOriginalName();
            //$file->move(public_path().'/leyes', $name);
            $path = $request->file('pdf')->storeAs('leyes', $name);
        }
        
        $leypdf = new Ley();
        $leypdf->nombre = $request->input('nombre');
        $leypdf->categoria = $request->input('categoria');
        $leypdf->ruta = $path;
        $leypdf->save();
        
        $leyes = Ley::all();

        return view('admin.leyes.index', compact('leyes'));
        //return view('admin.leyes.index');
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
    public function edit(Ley $leye)
    {
        return view('admin.leyes.edit', [ 'leye' => $leye ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ley $leye)
    {

        $leye->nombre = $request->input('nombre');
        $leye->categoria = $request->input('categoria');

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $name = $file->getClientOriginalName();
            //$file->move(public_path().'/leyes', $name);
            $path = $request->file('pdf')->storeAs('leyes', $name);
            $leye->ruta = $path;
            $leye->save();
        }
        $leye->save();

        return redirect()
            ->route('admin.leyes.edit', $leye)
            ->with('flash', 'La publicacion ha sido guardada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ley $leye)
    {
        $leye->delete();
        return redirect()
            ->route('admin.leyes.index')
            ->with('flash', 'La publicacion ha sido eliminada');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modal;

class ModalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modals = Modal::all();

        return view('admin.modals.index', compact('modals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modals.create');
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
            'imagen' => 'required|file|mimes:jpg, png, bmp',
        ]);

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/modal', $name);
        }

        $modals = new Modal();
        $modals->nombre = $request->input('nombre');
        $modals->ruta = $name;
        $modals->save();

        $modals = Modal::all();

        return view('admin.modals.index', compact('modals'));
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
    public function edit(Modal $modal)
    {
        return view('admin.modals.edit', [ 'modal' => $modal ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modal $modal)
    {
        $modal->nombre = $request->input('nombre');

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/modal', $name);
            $modal->ruta = $name;
            $modal->save();
        }
        $modal->save();

        return redirect()
            ->route('admin.modals.edit', $modal)
            ->with('flash', 'La imagen ha sido guardada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modal $modal)
    {
        $modal->delete();
        return redirect()
            ->route('admin.modals.index')
            ->with('flash', 'La publicacion ha sido eliminada');
    }
}

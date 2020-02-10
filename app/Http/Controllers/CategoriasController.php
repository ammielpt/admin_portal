<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoria = new Categoria();
        $categoria->categoria_activo = config('constants.condicion.activo');
        return view('categorias.form_nuevo', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'categoria_nombre' => 'required'
        ]);
        if (!$request->categoria_activo)
            $request->merge(['categoria_activo' => config('constants.condicion.inactivo')]);
        Categoria::create([
            'categoria_nombre' => $request->get('categoria_nombre'),
            'categoria_descripcion' => $request->get('categoria_descripcion'),
            'categoria_activo' => $request->get('categoria_activo')
        ]);
        return redirect()->route('categoria.index');
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
        $categoria = Categoria::findOrFail($id);
        return view('categorias.form_editar', compact('categoria'));
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
        $categoria = Categoria::findOrFail($id);
        request()->validate([
            'categoria_nombre' => 'required'
        ]);
        if (!$request->categoria_activo)
            $request->merge(['categoria_activo' => config('constants.condicion.inactivo')]);
        $categoria->update([
            'categoria_nombre' => $request->get('categoria_nombre'),
            'categoria_descripcion' => $request->get('categoria_descripcion'),
            'categoria_activo' => $request->get('categoria_activo')
        ]);
        return redirect()->route('categoria.index');
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

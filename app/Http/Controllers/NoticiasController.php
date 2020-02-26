<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Noticia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $noticias= Noticia::all();
        return view('noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $noticia= new Noticia();
        $categorias = Categoria::where('categoria_activo', config('constants.condicion.activo'))->get();
        return view('noticias.form_nuevo', compact('categorias','noticia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia= (new Noticia)->fill([
            "noticia_titulo"=>$request->get('noticia_titulo'),
            "noticia_fecha_publicacion"=>Carbon::parse($request->get('noticia_fecha_publicacion'))->format('Y-m-d H:i:s'),
            "noticia_imagen_nombre"=>$request->file('noticia_imagen')->getClientOriginalName(),
            "noticia_imagen"=>$request->file('noticia_imagen')->store('public'),
            "noticia_descripcion"=>$request->get('noticia_descripcion')
        ]);
        request()->validate([
            "noticia_titulo"=>"required",
            "noticia_fecha_publicacion"=>"required",
            "noticia_imagen"=>"required|image",
            "noticia_descripcion"=>"required"
        ]);
        //$date = Carbon::parse($request->startFrom)->format('d-m-Y H:i:s');
        $noticia->save();
        $noticia->categorias()->attach($request->get('noticia_categorias'));
        return redirect()->route('noticia.index');
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
        $noticia = Noticia::findOrFail($id);
        $categorias=Categoria::all();
        return view('noticias.form_editar',compact('noticia','categorias'));
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

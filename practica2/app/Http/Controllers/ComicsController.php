<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use DB;

class ComicsController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = DB::table('comics')->get();
        return view('home')->with('comics',$comics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nuevo-comic');
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
            'serie' => 'required|max:64',
            'titulo' => 'required|max:64',
            'tomos' => 'required|max:64',
            'año' => 'required|numeric',
            'dibujo' => 'required|max:64',
            'guion' => 'required|max:64',
            'editorial' => 'required|max:64',
            'resumen' => 'required',
            'ruta_imagen' => 'required'
        ]);

        DB::table('comics')->insert([
            'serie' => $request->serie,
            'titulo' => $request->titulo,
            'tomos' => $request->tomos,
            'año' => $request->año,
            'dibujo' => $request->dibujo,
            'guion' => $request->guion,
            'editorial' => $request->editorial,
            'resumen' => $request->resumen,
            'ruta_imagen' => $request->ruta_imagen
        ]);
        
        return redirect('home')->with('success', 'El comic ha sido creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('show')->with('comic',$comic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $comic = Comic::find($id);
         return view('edit')->with('comic',$comic);
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
        // Con validación
        $request->validate([
            'serie' => 'required|max:64',
            'titulo' => 'required|max:64',
            'tomos' => 'required|max:64',
            'año' => 'required|numeric',
            'dibujo' => 'required|max:64',
            'guion' => 'required|max:64',
            'editorial' => 'required|max:64',
            'resumen' => 'required',
            'ruta_imagen' => 'required'
        ]);

        DB::table('comics')-> where('id',$id)-> update([
            'serie' => $request->serie,
            'titulo' => $request->titulo,
            'tomos' => $request->tomos,
            'año' => $request->año,
            'dibujo' => $request->dibujo,
            'guion' => $request->guion,
            'editorial' => $request->editorial,
            'resumen' => $request->resumen,
            'ruta_imagen' => $request->ruta_imagen
        ]);
        $comic = Comic::find($id);

        return view('show')->with('comic',$comic);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('comics')->where('id',$id)->delete();
        
        $comics = DB::table('comics')->get();
        return view('home')->with('comics',$comics);
    }
}
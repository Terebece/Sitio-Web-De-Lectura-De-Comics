<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Muestra todos los comics guardados.
     *
     * @return \Illuminate\Http\Response
     */
    public function muestraComics()
    {
        $comics = DB::select('select * from comics');

        return view('comic.index', ['comics' => $comics]);
    }
}

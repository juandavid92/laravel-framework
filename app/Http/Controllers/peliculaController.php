<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peliculaController extends Controller
{
    public function index($pagina = 1){
        $titulo = 'Listado de mis peliculas test';

        return view('pelicula.index',[
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }
}

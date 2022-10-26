<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function viewInicio(){
        return view('inicio');
    }
    public function viewPeliculas(){
        return view('peliculas');
    }
    public function viewRegistar(){
        return view('registrar');
    }
}

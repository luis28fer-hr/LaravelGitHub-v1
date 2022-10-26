<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadPelicula_form;
use PhpParser\Node\Expr\FuncCall;

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

    public function procesarPelicula_form(validadPelicula_form $req){

        return redirect('registrar');
    }
}

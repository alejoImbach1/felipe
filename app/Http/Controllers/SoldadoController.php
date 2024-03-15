<?php

namespace App\Http\Controllers;

use App\Models\Soldado;
use Illuminate\Http\Request;

class SoldadoController extends Controller
{
    function mostrar() {
        return view('soldado');
    }
    function store(Request $request) {
        $soldado = new Soldado();
        $soldado->nombres = $request->nombres;
        $soldado->apellidos = $request->apellidos;
        $soldado->grado = $request->grado;
        $soldado->save();
        return "se registró";
    }
}

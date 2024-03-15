<?php

namespace App\Http\Controllers;

use App\Models\Cuerpo;
use Illuminate\Http\Request;

class CuerpoController extends Controller
{
    function mostrar() {
        return view('cuerpo');
    }
    function store(Request $request) {
        $cuerpo = new Cuerpo();
        $cuerpo->categoria = $request->categoria;
        $cuerpo->denominacion = $request->denominacion;
        $cuerpo->save();
        return "se registró";
    }
}

<?php

namespace App\Http\Controllers;

class ColaboraController extends Controller
{
    public function adopta()
    {
        $titulo = '¡Ayuda a los animales necesitados!';
        return view('front-client.colabora', compact('titulo'));
    }

    
}

<?php

namespace App\Http\Controllers;

class ColaboraController extends Controller
{
    public function adopta()
    {
        $titulo = 'AYÚDANOS A CONSERVAR LA NATURALEZA';

        $texto = 'Únete a la mayor organización independiente de defensa de la naturaleza. 
        Gracias al apoyo de  nuestros socios y socias podemos seguir luchando por la conservación 
        de lugares únicos y especies en peligro en todo el mundo. Al unirte a WWF estás ayudando a 
        conservar especies amenazadas como el lince y el lobo ibérico y a proteger  bosques y océanos. 
        ¡Contamos contigo!, algunos de esos ejemplos los puedes encontrar aqui:';

        // imagen
        $imagen = '../storage/loro.png';

        return view('front-client.colabora', compact('titulo', 'texto', 'imagen'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        // Recuperar las noticias más recientes
        $recentNews = News::latest()->take(3)->get();        
        // Retornar la vista con los datos
        return view('front-client.home', ['recentNews' => $recentNews]);
    }
}


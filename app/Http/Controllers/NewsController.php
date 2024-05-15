<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        // Obtener las tres noticias más recientes
        $recentNews = News::orderBy('publish_date', 'desc')->take(3)->get();

        // Pasar los datos a la vista
        return view('tu_vista', ['recentNews' => $recentNews]);
    }
}


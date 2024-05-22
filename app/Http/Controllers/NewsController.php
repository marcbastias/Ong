<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory; // Asegúrate de importar el modelo de Category

class NewsController extends Controller
{
    public function index()
    {
        // Obtener las tres noticias más recientes
        $recentNews = News::orderBy('publish_date', 'desc')->take(3)->get();

        // Pasar los datos a la vista
        return view('news.index', ['recentNews' => $recentNews]);
    }

    public function create()
    {
        $categories = NewsCategory::all();
        dd($categories);
        return view('admin.posts.index', compact('categories'));
    }


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:news_categories,id',
            'author_id' => 'required|exists:users,id',
            'publish_date' => 'nullable|date',
        ]);

        // Crear una nueva noticia
        News::create($validated);

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin.posts.index')->with('info', 'La noticia se ha creado correctamente');
    }
}

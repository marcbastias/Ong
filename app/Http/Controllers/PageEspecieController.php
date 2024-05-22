<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageEspecie;

class PageEspecieController extends Controller
{
    public function index()
    {
        $pages = PageEspecie::all();
        return view('front-client.especies.index', compact('pages'));
    }

    public function create()
    {
        return view('pages_especies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'header_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $page = new PageEspecie;
        $page->title = $request->input('title');
        $page->subtitle = $request->input('subtitle');
        $page->content = $request->input('content');

        if ($request->hasFile('header_image')) {
            $page->header_image = base64_encode(file_get_contents($request->file('header_image')));
        }
        if ($request->hasFile('body_image_1')) {
            $page->body_image_1 = base64_encode(file_get_contents($request->file('body_image_1')));
        }
        if ($request->hasFile('body_image_2')) {
            $page->body_image_2 = base64_encode(file_get_contents($request->file('body_image_2')));
        }

        $page->save();

        return redirect()->route('pages_especies.index')->with('success', 'Página creada exitosamente.');
    }

    public function show(PageEspecie $page)
    {
        return view('pages_especies.show', compact('page'));
    }
}

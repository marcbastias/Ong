<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('crear_evento');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Evento creado correctamente.');
    }


    public function show(Event $events)
    {
        return view('mostrar_evento', compact('event'));
    }


    public function edit(Event $events)
    {
        return view('editar_evento', compact('event'));
    }

    public function update(Request $request, Event $events)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required',
        ]);

        $events->update($request->all());

        return redirect()->route('events.index')->with('success', 'Evento actualizado correctamente.');
    }

    
     
    public function destroy(Event $events)
    {
        $events->delete();

        return redirect()->route('events.index')->with('success', 'Evento eliminado correctamente.');
    }
}

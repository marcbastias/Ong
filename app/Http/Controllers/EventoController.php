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

    public function show(Event $event)
    {
        $event->start_date = \Carbon\Carbon::parse($event->start_date);
        $event->end_date = \Carbon\Carbon::parse($event->end_date);
    
        $similars = Event::where('location', $event->location)
                         ->where('start_date', '>=', $event->start_date)
                         ->where('id', '!=', $event->id)
                         ->orderBy('start_date')
                         ->take(4)
                         ->get();
    
        return view('events.show', compact('event', 'similars'));
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'start_date', 'end_date']; // Campos que no queremos que se llenen de forma masiva

    // Relación M:1
    public function organizer()
    {
        return $this->belongsTo(User::class, 'id'); 
    }

    // Validaciones
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'location' => 'required',
    ];

    // Mensajes de error personalizados
    public static $messages = [
        'start_date.required' => 'La fecha de inicio es obligatoria.',
        'start_date.date' => 'La fecha de inicio debe ser una fecha válida.',
        'end_date.required' => 'La fecha de fin es obligatoria.',
        'end_date.date' => 'La fecha de fin debe ser una fecha válida.',
        'end_date.after_or_equal' => 'La fecha de fin debe ser posterior o igual a la fecha de inicio.',
        'location.required' => 'La ubicación es obligatoria.',
    ];

    // Métodos adicionales
    public function totalEvents()
    {
        return static::count(); // Obtiene la cantidad total de eventos
    }
}

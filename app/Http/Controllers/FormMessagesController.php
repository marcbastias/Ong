<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormMessagesController extends Controller
{
    public function index()
    {
        $messages = Form::all(); // Recupera todos los mensajes de la tabla 'forms'

        return view('admin.messages.index', compact('messages')); // Pasa los mensajes a la vista
    }
}

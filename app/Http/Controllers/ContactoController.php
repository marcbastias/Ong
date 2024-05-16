<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class ContactoController extends Controller
{
    public function index()
    {
        return view('front-client.privacy.contacto');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'privacy_policy' => 'required|accepted',
        ]);

        // Crea un nuevo objeto Form y asigna los valores
        $form = new Form();
        $form->name = $request->input('name');
        $form->media = $request->input('media');
        $form->email = $request->input('email');
        $form->phone = $request->input('phone');
        $form->message = $request->input('message');
        $form->privacy_policy = true; // Esto será verdadero ya que el checkbox está marcado y validado
        $form->save();

        // Guardar archivo adjunto si existe
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            // Lógica para guardar el archivo adjunto
        }

        // Puedes agregar aquí más lógica según tus necesidades, como enviar correos electrónicos, etc.

        // Redirige al usuario a una página de confirmación u otra acción
        return redirect()->route('contact.success');
    }
}

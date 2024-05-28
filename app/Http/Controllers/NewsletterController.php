<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SuscripcionNewsletter;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'mayor_edad' => 'accepted',
            'acepto_proteccion_datos' => 'accepted',
        ]);

        $data = $request->only('nombres', 'apellidos', 'correo');

        Mail::to($data['correo'])->send(new SuscripcionNewsletter($data));

        return redirect()->back()->with('success', '¡Te has suscrito exitosamente al newsletter!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuscribeteNews;

class SubscriptionController extends Controller
{
    /**
     * Handle the subscription request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'correo' => 'required|email', // Requerido y debe ser un correo electrónico válido
        ]);

        // Obtener el correo electrónico del formulario
        $correo = $request->input('correo');

        try {
            // Enviar el correo electrónico de confirmación
            Mail::to($correo)->send(new SuscribeteNews());

            // Redirigir al usuario a una página de confirmación
            return redirect()->back()->with('success', '¡Gracias por suscribirte! Te hemos enviado un correo electrónico de confirmación.');
        } catch (\Exception $e) {
            // Si ocurre algún error al enviar el correo electrónico, redirigir con un mensaje de error
            return redirect()->back()->with('error', 'Ocurrió un error al procesar tu solicitud. Por favor, inténtalo de nuevo más tarde.');
        }
    }
}

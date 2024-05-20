<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAdminURL
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si la solicitud está destinada a la ruta específica del formulario de inicio de sesión
        if ($request->route()->getName() === 'admin.login') {
            return $next($request);
        }

        // Si la URL no coincide, redirige al usuario a otra página, como la página de inicio
        return redirect('/');
    }
}


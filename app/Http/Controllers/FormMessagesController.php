<?php

namespace App\Http\Controllers;

use App\Models\AnimalHelpRequest;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\JobApplication;
use App\Models\OtherQuery;
use App\Models\SocioAttention;
use Illuminate\Support\Facades\Storage;

class FormMessagesController extends Controller
{
    public function index()
    {
        $messages = Form::all(); // Recupera todos los mensajes de la tabla 'forms'

        return view('admin.forms.index', compact('messages')); // Pasa los mensajes a la vista
    }

    public function job()
    {
        $jobApplications  = JobApplication::all(); // Recupera todos los mensajes de la tabla 'forms'

        return view('admin.forms.job', compact('jobApplications')); // Pasa los mensajes a la vista
    }

    public function attention()
    {
        $socioAttentions = SocioAttention::all();
        return view('admin.forms.socio', compact('socioAttentions'));
    }

    public function help()
    {
        $formResults = AnimalHelpRequest::all();
        return view('admin.forms.help', compact('formResults'));
    }

    
    public function otherQueries()
    {
        $formResults = OtherQuery::all();
        return view('admin.forms.otherQuery', compact('formResults'));
    }

    public function downloadCV($id)
    {
        // Obtener la solicitud de trabajo por su ID
        $jobApplication = JobApplication::findOrFail($id);
    
        // Verificar si el currículum no es null
        if ($jobApplication->cv_file) {
            // Devolver el contenido del currículum como una descarga
            return response()->streamDownload(function () use ($jobApplication) {
                echo $jobApplication->cv_file;
            }, 'curriculum.pdf');
        } else {
            // Manejar el caso donde el currículum es null
            return response()->json(['error' => 'El currículum no está disponible'], 404);
        }
    }

}

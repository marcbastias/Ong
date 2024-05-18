<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Forms\AnimalHelpRequest;
use App\Models\Forms\JobApplication;
use App\Models\Forms\SocioAttention;
use App\Models\Forms\OtherQuery;

class ContactoController extends Controller
{
    public function index()
    {
        return view('front-client.privacy.contacto');
    }

    public function journalism(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'privacy_policy' => 'required|accepted',
        ]);
        $form = new Form();
        $form->name = $request->input('name');
        $form->media = $request->input('media');
        $form->email = $request->input('email');
        $form->phone = $request->input('phone');
        $form->message = $request->input('message');
        $form->privacy_policy = true; // Esto será verdadero ya que el checkbox está marcado y validado
        $form->save();
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
        }
        $form->save();

        return redirect()->route('contact.success');
    }

    public function work(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'position' => 'required|string',
            'message' => 'required|string',
            'cv_path' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'privacy_policy' => 'required|accepted',
        ]);

        $jobApplication = new JobApplication();
        $jobApplication->name = $request->input('name');
        $jobApplication->email = $request->input('email');
        $jobApplication->phone = $request->input('phone');
        $jobApplication->position = $request->input('position');
        $jobApplication->message = $request->input('message');
        $jobApplication->privacy_policy = true;

        // Guardar el archivo adjunto
        if ($request->hasFile('cv_path')) {
            $cv = $request->file('cv_path');
            $cvName = time() . '_' . $cv->getClientOriginalName();
            $cv->storeAs('cvs', $cvName);
            $jobApplication->cv = $cvName;
        }

        $jobApplication->save();

        return redirect()->route('contact.success');
    }

    public function help(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'animal_type' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'urgency' => 'required|string',
            'privacy_policy' => 'required|accepted',
        ]);

        $form = new AnimalHelpRequest();
        $form->name = $request->input('name');
        $form->email = $request->input('email');
        $form->phone = $request->input('phone');
        $form->animal_type = $request->input('animal-type');
        $form->location = $request->input('location');
        $form->description = $request->input('description');
        $form->urgency = $request->input('urgency');
        $form->privacy_policy = true;

        // Guardar la foto adjunta
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->storeAs('photos', $photoName);
            $form->photo = $photoName;
        }

        $form->save();

        return redirect()->route('contact.success');
    }

    public function attention(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'nullable|string',
            'email' => 'required|email',
            'member_number' => 'nullable|string',
            'message' => 'required|string',
            'privacy_policy' => 'required|accepted',
        ]);

        $form = new SocioAttention();
        $form->name = $request->input('first_name') . ' ' . $request->input('last_name');
        $form->email = $request->input('email');
        $form->phone = $request->input('phone');
        $form->member_number = $request->input('member_number');
        $form->message = $request->input('message');
        $form->privacy_policy = true;

        $form->save();

        return redirect()->route('contact.success');
    }

    public function otherQueries(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'relation' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string',
            'privacy_policy' => 'required|accepted',
        ]);

        $form = new OtherQuery();
        $form->name = $request->input('first_name');
        $form->last_name = $request->input('last_name');
        $form->relation = $request->input('relation_wwf');
        $form->email = $request->input('email');
        $form->phone = $request->input('phone');
        $form->message = $request->input('message');
        $form->privacy_policy = true;

        $form->save();

        return redirect()->route('contact.success');
    }
}



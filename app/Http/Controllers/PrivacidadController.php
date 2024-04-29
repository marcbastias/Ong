<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacidadController extends Controller
{
    public function privacy()
    {

        return view('front-client.privacy.politica');
    }
}

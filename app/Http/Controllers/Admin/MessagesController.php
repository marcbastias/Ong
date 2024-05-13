<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {

        return view('admin.messages.index');
    }
}

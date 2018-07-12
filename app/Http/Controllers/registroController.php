<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroController extends Controller
{
    public function inicio()
    {
        return view ('registro');
    }
}

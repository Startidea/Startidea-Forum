<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class foroController extends Controller
{
    public function inicio()
    {
        return view ('foro');
    }
}

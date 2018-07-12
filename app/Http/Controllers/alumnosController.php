<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnosController extends Controller
{
    public function inicio()
    {
        return view ('alumnos');
    }
}

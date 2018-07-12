<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encuentasController extends Controller
{
    public function inicio()
    {
        return view ('encuentas');
    }
}

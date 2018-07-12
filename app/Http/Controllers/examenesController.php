<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examenesController extends Controller
{
    public function inicio()
    {
        return view ('examenes');
    }
}

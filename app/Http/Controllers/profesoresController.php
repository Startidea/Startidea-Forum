<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profesoresController extends Controller
{
    public function inicio(){
        return view ("profesores");
    }
}

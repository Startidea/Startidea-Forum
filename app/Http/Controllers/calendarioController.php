<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calendarioController extends Controller
{
    public function inicio(){
        return view ("calendario");
    }
}

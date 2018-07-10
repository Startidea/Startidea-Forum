@extends('layouts.app')

@section('title')
    STARTIDEA FORUM
@endsection

@section('img-logo')
    http://wayzone.es/view/img/logo-wayzone.png
@endsection

@section('submenu')

    <select id='select-course' onchange='changeCourse();'>
        <option value='1'>BIR</option>
        <option value='2'>FIR</option>
    </select>
    
    <script> 
        function changeCourse(){ 
            var sel = document.getElementById('select-course').value; 
            window.location = 'http:// {{ url()->current() }} &change-course='+sel; 
        }
    </script>
    
    <a href='/profesores-y-alumnos' class='button'>Profesores y alumnos</a>

@endsection

@section('user-menu')

    <div id='user-menu'>

        <div>

            <div class='image' style='background-image:url( {{ rand() }} )'></div>
            <div class='name'>
                <span class='name'>{{ 'Nombre' }}</span>
                <span class='email'>{{ 'Email' }}</span>
            </div>

        </div>

        <div class='clear'></div>

        <ul class='menu'>

            <li>
                <a href='/'>Inicio</a>
            </li>

            <li>
                <a href='/singout'>Salir</a>
            </li>

        </ul>

    </div>

@endsection

@section('login-register')

    <a href='/login'>Login</a>
    <a href='/registro'>Registro</a>

@endsection
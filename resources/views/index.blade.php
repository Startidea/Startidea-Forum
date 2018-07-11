{{----------------------------------------------------------------------------
    RECOGER DATOS 
    (En el futuro el datos vendrán desde el controlador, de donde haremos 
    las llamadas a la base de datos)
----------------------------------------------------------------------------}}

@php
    
    $data = array(

        'head-title' => 'STARTIDEA FORUM',
        'head-css' => URL::asset('css/app.css'),
        
        'body-id' => Request::is('/') ? 'index' : Request::path(),

        'header-logo-a' => '/',
        'header-logo' => 'http://wayzone.es/view/img/logo-wayzone.png',

        'courses' => array(
            0 => 'Curso 1',
            1 => 'Curso 2',
        ),

        'submenu' => array(
            0 => array(
                'route' => 'profesores',
                'name' => 'Profesores',
            ),
            1 => array(
                'route' => 'alumnos',
                'name' => 'Alumnos',
            ),
        ),

        'user-menu-img' => 'https://cdn.icon-icons.com/icons2/827/PNG/512/user_icon-icons.com_66546.png',
        'user-menu-name' => 'Nombre usuario',
        'user-menu-email' => 'Email usuario',

        'user-menu' => array(
            0 => array(
                'route' => '/',
                'name' => 'Inicio',
            ),
        ),

        'user-menu-signout-route' => '/salir',
        'user-menu-signout' => 'Salir',

        'login-route' => '/salir',
        'login' => 'Salir',
        'register-route' => '/registro',
        'register' => 'Registro',

        'menu' => array(
            0 => array(
                'route' => 'login',
                'name' => 'Login',
                'session' => false,
            ),
            1 => array(
                'route' => 'registro',
                'name' => 'Registro',
                'session' => false,
            ),
            2 => array(
                'route' => 'inicio',
                'name' => 'Inicio',
                'session' => true,
            ),
        ),

        'footer-copyright' => 'Copyright',

        'footer-menu' => array(
            0 => array(
                'route' => 'temas-legales',
                'name' => 'Temas legales',
            ),
            1 => array(
                'route' => 'politica-de-privacidad',
                'name' => 'Política de privacidad',
            ),
            2 => array(
                'route' => 'contacto',
                'name' => 'Contacto',
            ),
        ),

    );

@endphp

{{-- IMPOTAR PLANTILLA --}}

@extends('layouts.app')

    {{-- DATOS DEL HEAD --}}

    @section('head-title')
        {{ $data['head-title'] }}
    @endsection

    @section('head-css')
        {{ $data['head-css'] }}
    @endsection

    {{-- DATOS DEL BODY --}}

    @section('body-id')
        {{ $data['body-id'] }}
    @endsection

        {{-- DATOS DEL HEADER --}}

        @section('header-logo-a')
            {{ $data['header-logo-a'] }}
        @endsection

        @section('header-logo')
            {{ $data['header-logo'] }}
        @endsection

            {{-- DATOS DEL MENU USER --}}

            @section('user-menu-img')
                {{ $data['user-menu-img'] }}
            @endsection

            @section('user-menu-name')
                {{ $data['user-menu-name'] }}
            @endsection

            @section('user-menu-email')
                {{ $data['user-menu-email'] }}
            @endsection

        {{----------------------------------------------------------------------------
            HTML DEL CONTENT
            (HTML único de esta vista)
        ----------------------------------------------------------------------------}}

        @section('content')

            <!-- CABECERA DEL CONTENIDO -->
		
            <div id='header-content'>



            </div>

            <!-- BODY DEL CONTENIDO -->

            <div id='body-content'>



            </div>

        @endsection

        {{-- DATOS DEL FOOTER --}}

        @section('footer-copyright')
            {{ $data['footer-copyright'] }}
        @endsection

        @section('header-logo')
            {{ $data['header-logo'] }}
        @endsection
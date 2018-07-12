{{----------------------------------------------------------------------------
    IMPOTAR PLANTILLA
----------------------------------------------------------------------------}}

@extends('layouts.app')

{{----------------------------------------------------------------------------
    RECOGER DATOS 
    (En el futuro el datos vendrán desde el controlador, de donde haremos 
    las llamadas a la base de datos)
----------------------------------------------------------------------------}}

@php
    
    $data_view = array(

        'title' => 'Editar',

        'parrafo' => 'En construcción...',

    );

@endphp

{{----------------------------------------------------------------------------
    HTML DEL CONTENT
----------------------------------------------------------------------------}}

@section('content')

    <!-- CABECERA DEL CONTENIDO -->

    <div id='header-content'>

        <h1>{{ $data_view['title'] }}</h1>

    </div>

    <!-- BODY DEL CONTENIDO -->

    <div id='body-content'>

            <p>{{ $data_view['parrafo'] }}</p>

    </div>

@endsection
{{----------------------------------------------------------------------------
    RECOGER DATOS 
    (En el futuro el datos vendrán desde el controlador, de donde haremos 
    las llamadas a la base de datos)
----------------------------------------------------------------------------}}

@php

    $data_app = array(

        'language' => app()->getLocale(),

        'head-title' => 'STARTIDEA FORUM',
        'head-css-reset' => URL::asset('css/reset.css'),
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

{{----------------------------------------------------------------------------
    HTML DE LA PLANTILLA
----------------------------------------------------------------------------}}

<!doctype html>
{{-- recoge el lenguaje del cliente --}}
<html lang='{{ $data_app['language'] }}'> 

<head>

        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>{{ $data_app['head-title'] }}</title>

        <link href='{{ $data_app['head-css-reset'] }}' type='text/css' rel='stylesheet' media=''>
        <link href='{{ $data_app['head-css'] }}' type='text/css' rel='stylesheet' media=''>

    </head>

    <body id='{{ $data_app['body-id'] }}'>

        <div id='center'>
				
            <header id='header'>
            
                <div class='logo'>

                    <a href='{{ $data_app['header-logo-a'] }}'>
                        <img src='{{ $data_app['header-logo'] }}'/>
                    </a>

                </div>
            
                <div class='submenu'>

                    @if (!Auth::check())

                        @if (count($data_app['courses']) != 0)

                            <select id='select-course' onchange='changeCourse();'>

                                @foreach ($data_app['courses'] as $key => $value)

                                    <option value='{{ $key }}'>{{ $value }}</option>

                                @endforeach

                            </select>

                        @endif
                        
                        <script> 
                            function changeCourse(){ 
                                var sel = document.getElementById('select-course').value; 
                                window.location = '{{ url()->current() }}?change-course='+sel; 
                            }
                        </script>

                        @foreach ($data_app['submenu'] as $key => $value)

                            <a href='/{{ $value['route'] }}' class='button'>{{ $value['name'] }}</a>

                        @endforeach
                    
                    @endif

                </div>
                
                <div class='links'>

                    <div class='login-register'>
                        {{-- si usuario esta autenticado --}}

                        @if (!Auth::check())

                            <div id='user-menu'>

                                <div>
                        
                                    <div class='image' style='background-image:url({{ $data_app['user-menu-img'] }})'></div>
                                    <div class='name'>
                                        <span class='name'>{{ $data_app['user-menu-name'] }}</span>
                                        <span class='email'>{{ $data_app['user-menu-email'] }}</span>
                                    </div>
                        
                                </div>
                        
                                <div class='clear'></div>
                        
                                <ul class='menu'>
                                    {{-- rellenar lista con los valores del usuario?? --}}

                                    @foreach ($data_app['user-menu'] as $key => $value)

                                        <li>
                                            <a href='/{{ $value['route'] }}'>{{ $value['name'] }}</a>
                                        </li>
            
                                    @endforeach
                        
                                    <li>
                                        <a href='/{{ $data_app['user-menu-signout-route'] }}'{{ $data_app['user-menu-signout'] }}</a>
                                    </li>
                        
                                </ul>
                        
                            </div>
                        
                        @else

                            <a href='/{{ $data_app['login-route'] }}'>{{ $data_app['login'] }}</a>
                            <a href='/{{ $data_app['register-route'] }}'>{{ $data_app['register'] }}</a>
                        
                        @endif

                    </div>

                    <div class='clear'></div>

                </div>
            
            </header>

            <div class='clear'></div>

            <div id='main'>

                <div id='sidebar-mobile'></div>
                
                <div id='sidebar'>
						
                    <nav>

                        <ul>

                            @foreach ($data_app['menu'] as $key => $value)

                                @if (!Auth::check() AND !$value['session'])
                                
                                    <a href='/{{ $value['route'] }}'>
                                        {{-- request equivale a session_start de php --}}
                                        <li class='menu-login {{ Request::is($value['route']) ? 'select' : '' }}'>
                                            {{ $value['name'] }}
                                        </li>
                                    </a>

                                @endif

                                @if (Auth::check() AND $value['session'])
                                
                                    <a href='/{{ $value['route'] }}'>
                                        <li class='menu-login {{ Request::is($value['route']) ? 'select' : '' }}'>
                                            {{ $value['name'] }}
                                        </li>
                                    </a>

                                @endif
    
                            @endforeach

                        </ul>
                    
                    </nav>

                </div>

                <div id='dark-layer'></div>
            
                <div id='content'>

                    @yield('content')

                </div>
    
            </div>

            <div class='clear'></div>
        
            <footer id='footer'>
					
                <div class='copyright'>

                    <p>{{ $data_app['footer-copyright'] }}</p>

                </div>
            
                <div class='menu'>

                    <ul>

                        @foreach ($data_app['footer-menu'] as $key => $value)

                            <li>
                                <a href='/{{ $value['route'] }}'>{{ $value['name'] }}</a>
                            </li>

                        @endforeach

                    </ul>

                </div>
            
            </footer>

            <div class='clear'></div>

        </div>
       
    </body>

</html>

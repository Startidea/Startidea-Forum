<!doctype html>
<html lang='{{ app()->getLocale() }}'>

    <head>

        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>@yield('title')</title>

        <link href='{{ URL::asset('css/app.css') }}' type='text/css' rel='stylesheet' media=''>

    </head>

    <body id='{{ Request::is('/') ? 'index' : Request::path() }}'>

        <div id='center'>
				
            <header id='header'>
            
                <div class='logo'>

                    <a href='/'>
                        <img src='@yield('img-logo')'/>
                    </a>

                </div>
            
                <div class='submenu'>

                    @if(Auth::check())

                        @yield('submenu')
                    
                    @endif

                </div>
                
                <div class='links'>

                    <div class='login-register'>

                        @if(Auth::check())

                            @yield('user-menu')
                        
                        @else

                            @yield('login-register')
                        
                        @endif

                    </div>

                    <div class='clear'></div>

                </div>
            
            </header>

            <div class='clear'></div>

            <div id='main'>

                <div id='sidebar-mobile'></div>
                
                <!--<div id='sidebar'>
						
                    <nav>

                        <ul>
                            
                                <a href='?page=login'>
                                    <li class='menu-login ". $menu['login'] ."'>
                                        Login
                                    </li>
                                </a>

                                <a href='?page=registro'>
                                    <li class='menu-registro ". $menu['registro'] ."'>
                                        Registro
                                    </li>
                                </a>

                            } else {
                            
                                <a href='?page=index'>
                                    <li class='menu-inicio ". $menu['index'] ."'>
                                        Inicio
                                    </li>
                                </a>

                                if($_SESSION['type'] != 'profesor'){
                                
                                    <a href='?page=calendarios'>
                                        <li class='menu-calendarios ". $menu['calendarios'] ."'>
                                            calendarios
                                        </li>
                                    </a>
                                    
                                    <a href='?page=asignaturas'>
                                        <li class='menu-asignaturas ". $menu['asignaturas'] ."'>
                                            asignaturas
                                        </li>
                                    </a>
                                    
                                    <a href='?page=videoclases'>
                                        <li class='menu-videoclases ". $menu['videoclases'] ."'>
                                            videoclases
                                        </li>
                                    </a>
                                    
                                    <a href='?page=simulacros-finales'>
                                        <li class='menu-simulacros ". $menu['simulacros'] ."'>
                                            simulacros finales
                                        </li>
                                    </a>
                                    
                                    <a href='?page=examenes-oficiales'>
                                        <li class='menu-examenes ". $menu['examenes'] ."'>
                                            examenes oficiales
                                        </li>
                                    </a>
                                    
                                    <a href='?page=otros-documentos'>
                                        <li class='menu-otros-documentos ". $menu['otros-documentos'] ."'>
                                            otros documentos
                                        </li>
                                    </a>

                                }

                                if($_SESSION['course'] == 1){
                                    $iframe_course = 'bir'
                                } else if($_SESSION['course'] == 2){
                                    $iframe_course = 'fir'
                                }
                                                        
                                <a href='?page=foro#/categories/". $iframe_course ."'>
                                    <li class='menu-foro ". $menu['foro'] ."'>
                                        foro
                                    </li>
                                </a>

                                if($_SESSION['type'] == 'admin'){
                                
                                    <a href='?page=encuestas'>
                                        <li class='menu-encuestas ". $menu['encuestas'] ."'>
                                            encuestas
                                        </li>
                                    </a>

                                }

                                if($_SESSION['type'] == 'alumno'){
                                
                                    <a href='?page=encuestas'>
                                        <li class='menu-encuestas ". $menu['encuestas'] ."'>
                                            encuestas
                                        </li>
                                    </a>

                                    <a href='?page=corregir-simulacro'>
                                        <li class='menu-corregir-simulacro ". $menu['corregir-simulacro'] ."'>
                                            corregir simulacro
                                        </li>
                                    </a>
                                    
                                    <a href='?page=mis-informes'>
                                        <li class='menu-mis-informes ". $menu['mis-informes'] ."'>
                                            mis informes
                                        </li>
                                    </a>
                                    
                                    <a href='?page=mi-evolucion'>
                                        <li class='menu-mi-evolucion ". $menu['mi-evolucion'] ."'>
                                            mi evolucion
                                        </li>
                                    </a>

                                }

                                if($_SESSION['type'] == 'admin'){

                                    <a href='?page=excel-respuestas'>
                                        <li class='menu-excel-respuestas ". $menu['excel-respuestas'] ."'>
                                            excel respuestas
                                        </li>
                                    </a>

                                }

                                if($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'profesor'){
                                    
                                    <a href='?page=informes-alumnos'>
                                        <li class='menu-mis-informes ". $menu['informes-alumnos'] ."'>
                                            informes alumnos
                                        </li>
                                    </a>
                                    
                                    <a href='?page=evolucion-alumnos'>
                                        <li class='menu-mi-evolucion ". $menu['evolucion-alumnos'] ."'>
                                            evolucion alumnos
                                        </li>
                                    </a>

                                }

                            }

                        </ul>
                    
                    </nav>

                </div>

                <div id='dark-layer'></div>-->

                <div id='content' class='acuario'>
		
                    <div id='header-content'>



                    </div>

                    <div id='body-content'>



                    </div>
                    
                </div>
    
            </div>

            <div class='clear'></div>
        
            <footer id='footer'>
					
                <div class='copyright'>

                    <p>Copyright</p>

                </div>
            
                <div class='menu'>

                    <ul>

                        <li>
                            <a href='/temas-legales'>Temas legales</a>
                        </li>

                        <li>
                            <a href='/politica-de-privacidad'>Política de privacidad</a>
                        </li>

                    </ul>

                </div>
            
                <div class='links'>

                    <a href='/contacto'>Contacto</a>

                </div>
            
            </footer>

            <div class='clear'></div>

        </div>
       
    </body>

</html>

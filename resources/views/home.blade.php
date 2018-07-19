<!DOCTYPE html>
<html lang="en">
<head>
  <title>WayZone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="{{ URL::asset('css/estiloGeneral.css') }}"> {{--copiar asi la url para enlazar con estilos --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Buscar</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">SobreNosotros</a></li>
        <li><a href="#">Alumnos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

      <nav class="menu">
        <ul>

          {{-- menu inicio con icono de casa----------------- --}}
          <li>
            <a href="#">
              <div class="icon-menu">
                <span class="iconicfill-home"></span>  {{--Llamando a la clase de font-icon con un span--}}
              </div>
              <div class="text-menu">
                  Inicio
                </div>
                <div class="clear"></div>
            </a>
          </li>

          {{-- menu calendarios con icono de calendario------------------- --}}
          <li>
            <a href="#">
              <div  class="icon-menu">
                <span class="iconicstroke-calendar-alt-stroke"></span> 
              </div>
              <div class="text-menu">
                  Calendarios
                </div>
                <div class="clear"></div>
            </a>
          </li>

          {{-- menu asignaturas con icono------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="entypo-graduation-cap"></span>
                </div>
                <div class="text-menu">
                    asignaturas
                  </div>
                  <div class="clear"></div>
              </a>
            </li>
            
            {{-- menu videoclases con icono------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="iconicstroke-movie"></span>
                </div>
                <div class="text-menu">
                    videoclases
                  </div>
                  <div class="clear"></div>
              </a>
            </li>
            
            {{-- menu simulacros con icono------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="maki-fire-station"></span>
                </div>
                <div class="text-menu">
                    simulacros oficiales
                  </div>
                  <div class="clear"></div>
              </a>
            </li>
           
            {{-- menu examenes con icono---------------------}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="maki-police"></span>
                </div>
                <div class="text-menu">
                    examenes oficiales
                  </div>
                  <div class="clear"></div>
              </a>
            </li>

             {{-- menu otros con icono------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="fontawesome-folder-open"></span>
                </div>
                <div class="text-menu">
                    Otros documentos
                  </div>
                  <div class="clear"></div>
              </a>
            </li>

            {{-- menu otros con foro------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="typicons-group"></span>
                </div>
                <div class="text-menu">
                    Foro
                  </div>
                  <div class="clear"></div>
              </a>
            </li>

            {{-- menu otros con encuestas------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="typicons-pieChart"></span>
                </div>
                <div class="text-menu">
                    Encuestas
                  </div>
                  <div class="clear"></div>
              </a>
            </li>

            {{-- menu excel con foro------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="iconicfill-magnifying-glass"></span>
                </div>
                <div class="text-menu">
                    Excel Respuestas
                  </div>
                  <div class="clear"></div>
              </a>
            </li>

            

            {{-- menu informes con foro------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="entypo-archive"></span>
                </div>
                <div class="text-menu">
                    Informes alumnos
                  </div>
                  <div class="clear"></div>
              </a>
            </li> 

            {{-- menu evolucion con foro------------------- --}}
          <li>
              <a href="#">
                <div class="icon-menu">
                  <span class="typicons-lineChart"></span>
                </div>
                <div class="text-menu">
                    Evolucion alumnos
                  </div>
                  <div class="clear"></div>
              </a>
            </li>

        </ul>


      </nav>
      
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Bienvenido</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a FlandersOdio a Flanders Odio a Flanders
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a FlandersOdio a Flanders Odio a Flanders
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a FlandersOdio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a FlandersOdio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a FlandersOdio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders 
          Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a Flanders Odio a FlandersOdio a Flanders Odio a Flanders   
      </p>
    </div>
    <div class="col-sm-2 sidenav2">
      <div class="well">
        <p>Publicidad</p>
      </div>
      <div class="well">
        <p>Publicidad</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Academia blablabla</p>
</footer>

</body>
</html>
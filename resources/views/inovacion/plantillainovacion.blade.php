<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
    <title>@yield('title')</title>

    <!-- Bootstrap -->

    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{asset('css/estilos.css')}}" rel="stylesheet"> 
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet"> 
  <link href="{{asset('css/estilosadmin.css')}}" rel="stylesheet"> 
  <link href="{{asset('css/estilospublicacion.css')}}" rel="stylesheet"> 
    @yield('css')
   <!-- <link rel="stylesheet" href="css/font-awesome.css">-->
  
   <!--Pulling Awesome Font -->
   
     </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" >
      
      <div class="container-fluid text-center">
       <div class="row">
            <div class="col-md-offset-1 col-md-10 col-md-offset-1"> 
            
            <div class="row encabezado">
                <div class="col-md-5 img-responsive" alt="Responsive image"> 
                  <img src="{{asset('img/logo_cozcyt.png')}}" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-md-offset-4 col-md-3 img-responsive logo" alt="Responsive image"> 
                  <img src="{{asset('img/banner-colores-transp.png')}}" class="img-responsive" alt="Responsive image">
                </div>
            </div>

            <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
          
                  <li class="active"><a href="{{asset('inovacion/inovacion')}}">Inicio</a></li>
                  
                  <li><a href="{{asset('inovacion/publicacion')}}">Crear Publicación</a></li>
                  <li><a href="{{asset('inovacion/subirimagen')}}">Cargar Imágenes</a></li>
                  <li><a href="{{asset('inovacion/publicaciones')}}">Publicaciones</a></li>
                    <?php if (Auth::user()):?> 
                      <li><a href="#">{{Auth::user()->name}}</a></li>
                    <?php endif ?>
                  
                </ul>
                <ul class="nav navbar-nav navbar-right">

                  <li><a href="{{asset('logout')}}">Salir</a></li>
                  
                </ul>
                
                </div>

              </nav>

              @yield('contenido')  

            </div>


       </div>
      </div>
            <script src="{{asset('plugin/tinymce/js/tinymce/tinymce.min.js')}}"></script>
            <script src="{{asset('plugin/tinymce/js/tinymce/init-tinymce.js')}}"></script>
            <script src="{{asset('editor/dist/wysihtml5-0.3.0.min.js')}}"></script>
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/principal.js')}}"></script>
            <script src="{{asset('js/carousel.js')}}"></script>
            <script src="{{asset('js/apimaps.js')}}"></script>
               @yield('scripts')

    </body>
</html>
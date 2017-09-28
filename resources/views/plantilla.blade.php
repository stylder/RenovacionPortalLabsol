<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-sclae=1.0s">
    <meta name="theme-color" content="#2F752C">
    <meta name="robots" content="index">
@yield('meta')
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
    <title>@yield('title')</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
          rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet">
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilosbanner.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilosekk.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="css/font-awesome.css">-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Pulling Awesome Font -->


</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div id="band" class="container-fluid">
    <div class="row">
        <div class="col-xs-offset-1 col-sm-10">
            <!-- Encabezado -->
            <div class="row">
                <div class="col-sm-4 img-responsive" alt="Responsive image">
                    <a href="{{asset('Inicio')}}"><img src="{{asset('img/logo_cozcyt.png')}}" class="img-responsive"
                                                       alt="Responsive image"></a>
                </div>
                <div class="col-xs-offset-5 col-xs-3 img-responsive logo" alt="Responsive image">
                    <img src="{{asset('img/banner-colores-transp.png')}}" class="img-responsive" alt="Responsive image">
                </div>
            </div>
            <!-- Buscador -->
            <div class="row">
                <div class="col-md-offset-8 col-md-3">
                    <script>
                        (function () {
                            var cx = '012864177643124788135:hcvwtqa-dt4';
                            var gcse = document.createElement('script');
                            gcse.type = 'text/javascript';
                            gcse.async = true;
                            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(gcse, s);
                        })();
                    </script>
                    <gcse:search></gcse:search>


                </div>
                <div class="col-md-1">
                    <a class=" btn btn-default" href="mailto:contacto@cozcyt.gob.mx " target="_blank"> Contacto</a>
                </div>
            </div>

            <!-- Menu-->
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="navbar-header center">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">


                                <li class="dropdown active">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">COZCyT
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="QuienesSomos" rel="author">¿Quien Somos?</a></li>
                                        <li><a href="Directorio">Directorio</a></li>
                                        <li><a href="#">CECODIC</a></li>

                                        <li><a href="{{asset('doc/PECITI.pdf')}}" target="_blank">PECITI</a></li>
                                        <li><a href="{{asset('doc/MANUAL DE ORGANIZACION 2014.pdf')}}" target="_blank">Normatividad</a>
                                        </li>
                                        <li><a href="{{url('publicacionCecodic')}}">Publicaciones</a></li>

                                        <li><a href="{{url('publicacionesCozcyt')}}">Publicaciones</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Difusión y Divulgacion
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Ekk">Revista eek´</a></li>
                                        <li><a href="">Ciencia Itinerante</a></li>
                                        <li><a href="http://zigzag.gob.mx/">Zigzag</a></li>
                                        <li><a href="#">Agenda de Actividades</a></li>
                                        <li><a href="{{url('publicacionDif')}}">Publicaciones</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Desarrollo Talento
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('doc/becas.pdf')}} " target="_blank">Becas COZCyT</a></li>
                                        <li><a href="{{url('doc/becasextr.pdf')}}" target="_blank">Becas al
                                                Extranjero</a></li>
                                        <li><a href="#">Apoyos</a></li>
                                        <li><a href="{{url('publicacionBecas')}}">Publicaciones</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Innovación
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Fomix">FOMIX</a></li>
                                        <li><a href="#">PEI</a></li>
                                        <li><a href="#">Fondos</a></li>
                                        <li><a href="#">Vinculacion</a></li>
                                        <li><a href="http://cozcyt.gob.mx/labsol/">LABSOL</a></li>
                                        <li><a href="{{url('publicacioninova')}}">Publicaciones</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quantum <span
                                                class="caret"></span></a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Transparencia
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Transparencia">Transparencia</a></li>
                                        <li><a href="{{url('publicacionTrans')}}">Publicaciones</a></li>
                                    </ul>

                                </li>
                            </ul>

                        </div>
                    </div>

                </nav>
            </div>

        @yield('contenido')

        <!-- Footer-->
            <div class="row foot">
                <footer class="text-center">
                    <div class="col-xs-12">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#" class="icoYelp" title="Yelp"><i class="fa fa-yelp"></i></a></li>
                        </ul>
                    </div>
                    <div class="pre-footer" id="contact">
                        <div class="row">
                            <div class="col-xs-12 col-md-4">

                                <img src="{{asset('img/logofooter.png')}}" class="img-responsive"
                                     alt="Responsive image">

                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="row">
                                    <p align="center col-xs-12">Teléfonos</p>
                                    <div class="col-xs-6">

                                        <ul>
                                            <p align="left">922 30 05</p>
                                            <p align="left">922 53 50</p>


                                            <p align="left">911</p>
                                            <p align="left">089</p>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul>

                                            <p align="left">Cruz Roja Mexicana</p>
                                            <p align="left">Bomberos</p>


                                            <p align="left">Emergencias</p>
                                            <p align="left">Denuncia Anónima</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <p class="text-center">Contacto</p>

                                <span class="glyphicon glyphicon-home"> De la Juventud 504, Col. Barros Sierra</span>


                                <br>

                                <span class="glyphicon glyphicon-globe"> C.P. 98090 Zacatecas, Zac</span>
                                <br>
                                <span class="glyphicon glyphicon-earphone"> 921 28 16 y 921 30 18</span>

                                <br>
                                <br>
                                <br>
                                <br>

                                <center><a title="Contador De Visitas Gratis">
                                        <img style="border: 0px solid; display: inline;" alt="contador de visitas"
                                             src="http://www.websmultimedia.com/contador-de-visitas.php?id=235127"></a>
                                    <br><a>Visitas</a></center>
                                <br>


                            </div>
                        </div>
                        <div class="row">
                            <div class="up-arrow">
                                <div class="col-xs-3">
                                    <p>Licencia GPL 3.0 y Creative Commons</p>
                                </div>
                                <div class="col-xs-1">
                                    <img src="{{asset('img/labsol.png')}}" class="img-responsive"
                                         alt="Responsive image">
                                </div>
                            </div>
                        </div>


                    </div>

                </footer>


            </div>


        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="{{asset('js/jquery.min.js')}}"></script> -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/principal.js')}}"></script>
<script src="{{asset('js/carousel.js')}}"></script>
<script src="{{asset('js/apimaps.js')}}"></script>
</body>
</html>
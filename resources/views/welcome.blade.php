@extends('plantilla')

@section('title','Inicio | COZCyT')

@section('meta')
    <meta name="descripcion"
          content="Portal del Consejo Zacatecano de Ciencia, Tecnología e Innovación - Trabajemos Diferente">
    <meta name="keywords" content="gobierno, zacatecas, trabajemos, diferente">

@endsection
@section('contenido')
    <div class="row">
        <div class=" col-md-12 ">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                </ol>

                <!-- Wrapper for slides -->

                <div class="carousel-inner" role="listbox" align="center">
                    <?php
                    $i = true;

                    ?>

                    <?php
                    foreach($slider as $slid){

                    if ($i) {
                        $clase = "active";
                        echo '<div class="item ' . $clase . '">';
                        $i = false;
                    } else {
                        echo '<div class="item ">';
                    }
                    ?>


                    <a href="{{asset('publicaciones/' .$slid->url)}}">
                        <img src="{{asset('storage/' . $slid->imagen)}}" alt="Imagen">
                    </a>
                    <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>

                <?php }?>
            </div>


            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">


            <!----start-img-cursual---->
            <div id="owl-demo" class="owl-carousel text-center">
                <div class="item"><a href="{{url('doc/becas.pdf')}}">
                        <div class="cau_left" align="center">
                            <img class="lazyOwl" data-src="{{asset('img/BECAS1.png')}}" alt="Lazy Owl Image">
                        </div>
                        <div class="cau_left">
                            <h4>Becas
                    </a></h4>
                    <p align="justify">
                        El COZCYT formula y financia programas de becas y de apoyo a la formación de capital humano,
                        científico y tecnológico.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="cau_left" align="center">
                    <img class="lazyOwl" data-src="{{asset('img/FONDOS1.png')}}" alt="Lazy Owl Image">
                </div>
                <div class="cau_left">
                    <h4><a href="#">Fondos</a></h4>
                    <p align="justify">
                        A través de los diferentes fondos se realizan esfuerzos en la coordinación de la innovación,
                        desarrollo tecnológico y formación humano.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="cau_left" align="center">
                    <img class="lazyOwl" data-src="{{asset('img/EVENTOS1.png')}}" alt="Lazy Owl Image">
                </div>
                <div class="cau_left">
                    <h4><a href="#">Eventos</a></h4>
                    <p align="justify">
                        El COZCyT coordina y lleva a cabo una amplia variedad de eventos de impulso, difusión,
                        fortalecimiento y acercamiento a los zacatecanos a la Ciencia, Tecnología e Innovación
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="cau_left" align="center">
                    <img class="lazyOwl" data-src="{{asset('img/INDICADORES1.png')}}" alt="Lazy Owl Image">
                </div>
                <div class="cau_left">
                    <h4><a href="#">Indicadores </a></h4>
                    <p align="justify">
                        La base del diseño de las estrategias que el COZCyT y el Ejecutivo Estatal ha sido un detallado
                        diagnóstico estatal así como nacional que permita definir las rutas óptimas para fortalecer el
                        progreso de Zacatecas
                    </p>
                </div>
            </div>
            <div class="item"><a href="Ekk">
                    <div class="cau_left" align="center">
                        <img class="lazyOwl" data-src="{{asset('img/REVISTA1.png')}}" alt="Lazy Owl Image">
                    </div>
                    <div class="cau_left">
                        <h4>Revista EEK
                </a></h4>
                <p align="justify">
                    Publicación Bimestral especializada en temas científicos, tecnológicos e innovación desde la cual se
                    difunde avances destacados en Zacatecas así como su relación con las tendencias globales,
                </p>
            </div>
        </div>
        <div class="item"><a href="{{asset('doc/PECITI.pdf')}}">
                <div class="cau_left" align="center">
                    <img class="lazyOwl" data-src="{{asset('img/PECITI2.png')}}" alt="Lazy Owl Image">
                </div>
                <div class="cau_left">
                    <h4>PECITI
            </a></h4>
            <p align="justify">
                En el proceso de definición y diseño del Programa Especial de Ciencia, Tecnología e Innovación PECITI,
                hemos realizado un ejercicio de alineación al Plan Estatal de Desarrollo 2017-2021
                del estado de Zacatecas
            </p>
        </div>
    </div>
    <div class="item"><a href="http://cozcyt.gob.mx/labsol/">
            <div class="cau_left" align="center">
                <img class="lazyOwl" data-src="{{asset('img/LABSOL1.png')}}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4>Labsol
        </a></h4>
        <p align="justify">
            El Laboratorio de Software Libre desarrolla proyectos de innovación tecnológica, ofrece programas de
            capacitación especializa e impulsa el emprendimiento a una comunidad académica local y nacional.
        </p>
    </div>
    </div>
    <div class="item"><a href="http://zigzag.gob.mx/">
            <div class="cau_left" align="center">
                <img class="lazyOwl" data-src="{{asset('img/ZIGZAG1.png')}}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4>Zigzag
        </a></h4>
        <p align="justify">
            El ZigZag ofrece un espacio interactivo en el que a través de exhibiciones y actividades participativas, el
            juego nos acerca a la ciencia y la tecnología.

        </p>
    </div>
    </div>
    <div class="item">
        <div class="cau_left" align="center">
            <img class="lazyOwl" data-src="{{asset('img/quantum1.png')}}" alt="Lazy Owl Image">
        </div>
        <div class="cau_left">
            <h4><a href="#">Quantum</a></h4>
            <p align="justify">
                Quantum representa poder nombrar una era que pretende marcar el destino del quehacer de la ciencia y la
                tecnología en Zacatecas, situarnos en el radar de ciudades que ofrecen nuevas formas de emprender,
                crecer y desarrollar conocimiento.
            </p>
        </div>
    </div>

    </div>

    </div>
    </div>
    <div class="row">
        <div class="col-md-12">


            <div class="row ">


                @foreach($publicacion as $publica)

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="{{asset('publicaciones/' .$publica->url)}}" class="thumbnail">


                                    <img class="  mediana" src="{{asset('storage/' . $publica->imagen)}}" alt="...">


                                </a>
                                <h3 class="text-center"> {{ $publica->title}}</h3>
                                <hr>


                            </div>
                        </div>
                    </div>

                @endforeach


            </div>


        </div>


    </div>
    <div class="row">

        <div class="col-md-offset-3 col-md-3">

        </div>

        <div class=" col-md-3">


        </div>

    </div>
    <div class="row">

        <div class="col-md-4">


            <div id="googleMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.104361747704!2d-102.57848328211857!3d22.761507971706475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824e5e368a407f%3A0x185e26caed81fc92!2sCOZCyT+Consejo+Zacatecano+de+Ciencia+Tecnolog%C3%ADa+e+innovaci%C3%B3n!5e0!3m2!1ses!2smx!4v1487614558975"
                        align="center" width="100%" height="500" frameborder="0" style="border:0"
                        allowfullscreen></iframe>
            </div>


        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Twitter</div>
                <!--<div class="panel-body"><a class="twitter-timeline" href="https://twitter.com/TwitterDev">Tweets by TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>-->
                <a class="twitter-timeline" data-width="600" data-height="450" href="https://twitter.com/COZCyT">Tweets
                    by COZCyT</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>
        </div>
        <div class="col-md-4">
            <div class="fb-page"
                 data-href="https://www.facebook.com/Consejo-Zacatecano-de-Ciencia-Tecnolog%C3%ADa-e-Innovaci%C3%B3n-235013703220333/"
                 data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
                 data-hide-cover="false" data-show-facepile="true">
                <blockquote
                        cite="https://www.facebook.com/Consejo-Zacatecano-de-Ciencia-Tecnolog%C3%ADa-e-Innovaci%C3%B3n-235013703220333/"
                        class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/Consejo-Zacatecano-de-Ciencia-Tecnolog%C3%ADa-e-Innovaci%C3%B3n-235013703220333/">Consejo
                        Zacatecano de Ciencia, Tecnología e Innovación</a></blockquote>
            </div>
        </div>
    </div>


    </div>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection
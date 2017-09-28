@extends('transparencia.plantillatransparencia')

<?php if (Auth::user()):?> 
       @section('title',Auth::user()->type.' | Inicio')
    <?php endif ?>

@section('contenido')
<div class ="row">
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

                    <div class="carousel-inner" role="listbox" margin-left:0>
                                <?php
                                   $i = true;
                                   
                                ?>
                               
                               <?php
                                  foreach($slider as $slid){

                                if ($i) {
                                  
                                  
                                  $clase ="active";
                                  echo '<div class="item '.$clase.'">';
                                  $i = false;

                                }else{
                                  echo '<div class="item ">';
                                }

                                
                                                               
                                
                                ?>
                                
                                
                                <a href="">
                                <img src="{{asset('storage/' . $slid->imagen)}}" alt="New York" >
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
            <div class ="row">
                        <div class="col-md-12">
                   
                 
                   <h2><p align="center">-Consejo Zacatecano de Ciencia y Tecnología e Inovación-</p></h2>
                  <h3><p align="center">En el Cozcyt nuestra visión es impulsar y fortalecer el desarrollo científico y la modernización tecnológica de México</p></h3>
                  <br>

                 
                  <!----start-img-cursual---->
                            <div id="owl-demo" class="owl-carousel text-center">
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/becas.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">Becas</a></h4>
                                        <p>
                                            El COZCYT  formula y financia programas de becas y de apoyo a la formación de capital humano, científico y tecnológico.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/fondos.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">Fondos</a></h4>
                                        <p>
                                            Atravéz de los diferentes fondos se realizan esfuerzos en la cordinación de la innovación,desarrollo tecnológico y formación humano. 
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/eventos.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">Eventos</a></h4>
                                        <p>
                                            Los eventos mas proximos que se realizaran.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/empresas.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">Empresas</a></h4>
                                        <p>
                                            El COZCYT apoya el desarrollo tecnológico y científico de las empresas. 
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/comun.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">Comunicación</a></h4>
                                        <p>
                                            Mantente en comunicación con nosotros en todas nuestras redes sociales
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/estadisticas.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">Estadisticas </a></h4>
                                        <p>
                                            Generales sobre la ciencia, la tecnología y la innovación en México.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/revistas.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">EEK'</a></h4>
                                        <p>
                                            Mantente al tanto de nuestra revista ekk'
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/proyectos.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">Proyectos</a></h4>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cau_left" align="center">
                                        <img class="lazyOwl" data-src="{{asset('img/sni.png')}}" alt="Lazy Owl Image">
                                    </div>
                                    <div class="cau_left">
                                        <h4><a href="#">SNI</a></h4>
                                        <p>
                                            
                                        </p>
                                    </div>
                                </div>
                                
                                </div>
                            
                </div>
            </div>              
                <div class="row">
                 <div class="col-md-12">

  
                 
                      <div class="row "  >
                       <div class="col-md-3"></div>

                        @foreach($publicacion as $publica)

                        <div class="col-md-3">
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
                <div class="panel panel-default" >
                  <div class="panel-heading">Twitter</div>
                   <!--<div class="panel-body"><a class="twitter-timeline" href="https://twitter.com/TwitterDev">Tweets by TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>-->
                   <a class="twitter-timeline" data-width="600" data-height="450" data-theme="light" href="https://twitter.com/TwitterDev/likes">Tweets Liked by @TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
              </div>
               <div class=" col-md-3">
              
                <div class="fb-page" data-href="https://www.facebook.com/Aula12Oficial/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Aula12Oficial/" class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/Aula12Oficial/">Aula 12</a></blockquote></div>

            </div>
            
              </div>
    <div class="row">

  <div class="col-md-12">
    
              
    <div id="googleMap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.104361747704!2d-102.57848328211857!3d22.761507971706475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824e5e368a407f%3A0x185e26caed81fc92!2sCOZCyT+Consejo+Zacatecano+de+Ciencia+Tecnolog%C3%ADa+e+innovaci%C3%B3n!5e0!3m2!1ses!2smx!4v1487614558975" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    

    
  </div>
</div>
        
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection
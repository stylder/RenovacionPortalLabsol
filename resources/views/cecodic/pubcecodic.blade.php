@extends('cecodic.plantillacecodic')

	<?php if (Auth::user()):?> 
       @section('title',Auth::user()->type.' | Crear Publicacion')
    <?php endif ?>

			<!-- Form Name -->

@section('css')
 <link href="{{ asset('/css/galeria.css') }}" rel="stylesheet">
<link href="{{asset('css/estilospublicacion.css')}}" rel="stylesheet">
@endsection



@section('contenido')
<div class="row ">
<div class="col-md-6">
          <form class="form-horizontal" method="POST" action="Pub/create" accept-charset="UTF-8" enctype="multipart/form-data" files="true">
            <!-- Text input-->
            <div class="row ">
                    <div class="panel panel-default">
                      <div class="panel-heading">Publicacion</div>
                      <div class="panel-body">
                      
                        @include('flash::message')
                        @if($errors->has() )
                          <div class="alert alert-danger alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hiden="true">&times;</span>
                            </button>
                            <ul id="error">
                              @foreach($errors->all() as $error)
                                <li>{!! $error!!}</li>


                              @endforeach
                            </ul> 
                          </div>
                        @endif
            <div class="form-group">
              <label class="col-md-4 control-label" for="article_url">Nombre del Autor</label>  
              <div class="col-md-4">
              <input id="article_url" name="article_autor" type="text" placeholder="Autor" value="{{Auth::user()->name}}" readonly="readonly" class="form-control input-md" required>
             
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="article_title">Titulo</label>  
              <div class="col-md-4">
              <input id="article_title" name="article_titulo" type="text" placeholder="Titulo del Articulo" class="form-control input-md" required >
                
              </div>
            </div>

            <div class="form-group">
                  <label class="col-md-4 control-label" for="article_imagen">Imagen de portada</label>  
                    <div class="col-md-4">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="file" class="form-control" name="file" accept="image/jpeg,png,jpg" required data-toggle="tooltip" data-placement="right" title="selecciona una imagen para para que sea la imagen que aparesca como portada de la publicación" >
                        <input type="hidden" name="publicado" value="1">
                    </div>
            </div>

                <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="article_categories">Sección</label>
              <div class="col-md-4">
                <select id="article_categories" name="seccion" class="form-control"required>
                <?php if (Auth::user()->type == 'DT') {
                 echo"<option value='Becas'>Becas</option>";
                 }elseif (Auth::user()->type == 'admin') {
                  echo"<option value='principal'>principal</option>"; 
                }elseif (Auth::user()->type == 'inovacion') {
                  echo"<option value='FOMIX'>FOMIX</option>"; 
                  echo"<option value='PEI'>PEI</option>";
                }elseif (Auth::user()->type == 'difucion') {
                  echo"<option value='EEK'>EEK'</option>"; 
                }elseif (Auth::user()->type == 'cecodic') {
                  echo"<option value='Instalaciones'>Instalaciones</option>"; 
                  echo"<option value='Servicios'>Servicios</option>";
                  echo"<option value='Galeria'>Galeria</option>";
                }elseif (Auth::user()->type == 'transparencia') {
                  echo"<option value='Transparencia'>Transparencia</option>"; 
                }
                
                
                ?>
                  
                </select>

                 
              </div>
            </div>
            
            <div class="form-group">
            <label class=" control-label" for="article_categories" data-toggle="tooltip" data-placement="right" title="hace que aparesca la publicación en el slider de la pagina principal">Slider</label>    
            <input type="checkbox" name="vehicle" value="Car">
            </div>
            


            </div>

            <!-- Textarea -->
            
            <div class="row">
                <div class="col-md-12 text-center">
                <textarea class="tinymce" name="contenido">
                    
                </textarea>
                </div>
                
            </div>
            <div class="row">
            <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="left" title="guarda la publicación">Publicar</button>
            </div>
                      </div>
                    </div>

            
        </form>
    </div>


    
      <!-- Textarea -->
    
	<div class="col-md-6">
        <div class="panel panel-default">
  <div class="panel-heading">Imagenes</div>
  <div class="panel-body">
    <div id="main_area">
                
                
                    
                    <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <?php foreach ($imagenes as $imagen): ?>
                            <li class="col-sm-3 ima">
                                <a class="thumbnail" id="carousel-selector-15"><img class="img-responsive imag" src="{{asset('/uploads/').'/'.$imagen->url }}"></a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    
            
                    <!--/Slider-->
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
              
                            <label class="control-label link">URL</label>
                             
                            <input id="hi" name="article_titulo" type="text" placeholder="Url de la imágen......" class="form-control input-md">
                       
                       		<button id="copi" onclick="copiar('hi')" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="copea la url de la imagen seleccionada">Copiar la URL</button>
                        </div>
                   </div>
                </div>
  </div>
</div>

            
    </div>
</div>
@section('scripts')
<script type="text/javascript">
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
         $('.imag').bind('click', function(){       
        var src = $(this).attr('src');
        getElementById('article_title').value(src);
});
});</script>

<script type="text/javascript">
    
$('.imag').bind('click', function(){       
        var src = $(this).attr("src");
        //document.write(src);
        var porId=document.getElementById("hi").value = src;
        
});
  
</script>

<script type="text/javascript">
  
  
function copiar(id_elemento) {
  var aux = document.createElement("input");
  var b = document.getElementById(id_elemento).value;
  aux.setAttribute("value", b);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}

</script>


@endsection
@stop
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
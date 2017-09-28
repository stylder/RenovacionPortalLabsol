@extends('difucion.plantilladifucion')

	<?php if (Auth::user()):?> 
       @section('title',Auth::user()->type.' | Crear Revista')
    <?php endif ?>


@section('contenido')
<div class="panel panel-default">
  <div class="panel-heading">Revista ekk'</div>
  <div class="panel-body">
  @include('flash::message')
    <form class="form-horizontal" method="POST" action="revistaa" accept-charset="UTF-8" enctype="multipart/form-data" files="true" >
    	<div class="row" align="center">
    		<div class="form-group">
    			<label class="control-label" for="nombre">Nombre del Autor</label>
    			<input type="text" name="name_autor" class="form-control input-md" placeholder="Autor" required>
    			
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="Titulo">Titulo</label>
    			<input type="text" name="name_title" class="form-control input-md" placeholder="Titulo del Articulo" required>
    			
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="article_imagen">Portada de la Revista</label>
    			<input type="hidden" name="_token" value="{{csrf_token()}}">
    			<input type="file" class="form-control" name="file" required="ture">
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="article_URL">URL</label>
    			<input id="URL" type="text" name="URL" class="form-control input-md" placeholder="URL" required>
    			
    		</div>
    		<div class="form-group">
    			<button class="btn btn-primary" type="submit" data-toggle="tooltip" data-placement="left" title="guarda la Revista">Registrar</button>
    			
    		</div>
    	</div>
    </form>
  </div>
</div>
@endsection
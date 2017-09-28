<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1e7bbf">
    <meta name="robots" content="index">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Categoria 	</title>


    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{asset('css/estilos.css')}}" rel="stylesheet"> 
      <link href="{{asset('css/estiloslogin.css')}}" rel="stylesheet"> 

  
  </head>
  <body>
  		 <form class="form-horizontal">
		<fieldset>

		 <div class="row">
		 	 <div class="col-md-5 img-responsive" alt="Responsive image"> 
	    		<img src="{{asset('img/logo_cozcyt.PNG')}}" class="img-responsive" alt="Responsive image">
	    	</div>
			<div class="col-md-4 img-responsive" alt="Responsive image"> 
	    		
	    	</div>

			<div class="col-md-3 img-responsive" alt="Responsive image"> 
	    		<img src="{{asset('img/banner-colores-transp.png')}}" class="img-responsive" alt="Responsive image" width="80%">
	    	</div>
		 <div class="row text-center">

                 <div class="col-md-12 bg-primary">
                   
                   <h1 class="text-center">Categorias</h1>

                 </div> 

			<!-- Form Name -->
			<legend></legend>

			
			

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="article_title">Titulo</label>  
			  <div class="col-md-4">
			  <input id="article_title" name="article_titulo" type="text" placeholder="Titulo de la categoria" class="form-control input-md">
			    
			  </div>
			</div>

			
			

			

			

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="article_categories">Estatus</label>
			  <div class="col-md-4">
			    <select id="article_categories" name="article_categories" class="form-control">
			      <option value="1">Publicado</option>
			      <option value="2">No Publicado</option>
			    </select>
			     <button class="btn btn-default" type="submit">Publicar</button>
			  </div>
			</div>

			
			

		</fieldset>
	</form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <script src="{{asset('js/jquery.min.js')}}"></script>
     <script src="{{asset('plugin/tinymce/js/tinymce/tinymce.min.js')}}"></script>
     <script src="{{asset('plugin/tinymce/js/tinymce/init-tinymce.js')}}"></script>

    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/principal.js')}}"></script>
    <!-- wysihtml5 parser rules -->
	<script src="{{asset('editor/parser_rules/advanced.js')}}"></script>
<!-- Library -->
	<script src="{{asset('editor/dist/wysihtml5-0.3.0.min.js')}}"></script>

	
  </body>
</html>



   

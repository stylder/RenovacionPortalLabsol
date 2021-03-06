<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
    <title>Login</title>

    <!-- Bootstrap -->
     
 <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       <link href="{{asset('css/estiloslogin.css')}}" rel="stylesheet">
       
    
  </head>
  <body>
    


<!--Pulling Awesome Font -->
  <div class="container-fluid row encabezado">
  			<div class="row">
				<div class="col-xs-offset-1 col-sm-10">
	 		 <div class="col-sm-4  img-responsive" alt="Responsive image"> 
	    		<img src="{{asset('img/logo_cozcyt.png')}}" class="img-responsive" alt="Responsive image">
	    	</div>

			<div class="col-xs-offset-5 col-xs-3 img-responsive logo" alt="Responsive image"> 
	    		<img src="{{asset('img/banner-colores-transp.png')}}" class="img-responsive" alt="Responsive image" width="80%">
	    	</div>
	    	</div>
           </div>
		 <div class="row text-center">

                 <div class="col-md-offset-1 col-md-10 holi ">
                   
                   <h1 class="text-center">¡Bienvenido!</h1>

                 </div>
                </div>
                <div class="row ">
                <div class="col-md-offset-4 col-md-4 img-responsive" alt="Responsive image"> 
  <div class="panel panel-default">
  <div class="panel-heading " align="center">LOGIN</div>
  <div class="panel-body">
    

           @include('flash::message')
            @include('alerts.errors')
          @include('alerts.request')
<div class="row form-ad" align ="center">
  {!! Form::open(['url'=>'log','method'=>'POST'])!!}
  <div class="form-group">
  {!!Form::label('email','Correo electrónico') !!}
  {!! Form::email('email',null,['class'=> 'form-control','placeholder'=>'ejemplo@mail.com'])!!}
  </div>
  <div class="form-group">
  {!!Form::label('password','Contraseña') !!}
  {!! Form::password('password',['class'=> 'form-control','placeholder'=>'************'])!!}
  </div>
  <div class="form-group">
  {!!Form::submit('Acceder', ['class' => 'btn btn-primary']) !!}
  
  </div>
  {!! Form::close('')!!}
  {!!link_to('password/email',$title='¿Olvidaste tu contraseña?',$attributes=null, $secure =null )!!}
  </div>
        </div>
  
  
  </div>
  </div>
</div>
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
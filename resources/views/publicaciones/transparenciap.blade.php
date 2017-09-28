@extends('publicaciones.plantilla')

@section('title','Publicaciones Transparencia | COZCyT')

@section('contenido')
@include('flash::message')
<div class="row">
			 	

			 <div class="col-md-12">


				
						<div  id="grid" data-columns >

							@foreach($publicacion as $publica)

							<div>
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

@endsection
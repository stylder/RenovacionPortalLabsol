@extends('admin.users.plantillaadmin')

@section('title','Publicaciones')

@section('css')
    <link href="{{ asset('/css/estilosusuario.css') }}" rel="stylesheet">
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet"> 
<link href="{{asset('css/estilosadmin.css')}}" rel="stylesheet">
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet"> 
  <link href="{{asset('css/estilosadmin.css')}}" rel="stylesheet"> 
@endsection

@section('contenido')

<h1 class="text-center">Publicaciones</h1>

	  <div class="row publicaciones">
	  <div class="col-md-offset-2 col-md-8 col-md-offset-2">
	 
@include('flash::message')
	<table class="table table-striped publicaciones" >
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Titulo</th>
			<th>Sección</th>
		</thead>

		<tbody>
				@foreach($publicacion as $pub)
					<tr>
						<td>{{ $pub->id }} </td>
						<td>{{ $pub->name }} </td>
						<td>{{ $pub->title }} </td>
						<td>{{ $pub->seccion }} </td>
						
						
						<td> <a href="{{route('admin.publicacion.editpubli',$pub->id)}}"  class="btn btn-warning glyphi" data-toggle="tooltip" data-placement="left" title="Modifica la publicación"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

						<a href="{{route('admin.publicacion.destroy', $pub->id )}}"  class="btn btn-danger" onclick="return confirm('¿Seguro que deseas borrar la publicacion?')" data-toggle="tooltip" data-placement="right" title="Borra la Publicación"><span class=" glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> 
							
						</td>
					</tr>	
				@endforeach

		</tbody>

	</table>
			
		

</div>
 </div>
 {!! $publicacion->render() !!}
@endsection
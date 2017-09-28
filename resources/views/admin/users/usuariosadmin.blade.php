@extends('admin.users.plantillaadmin')

	<?php if (Auth::user()):?> 
       @section('title',Auth::user()->type.' | Usuarios')
    <?php endif ?>



@section('css')
    <link href="{{ asset('/css/estilosusuario.css') }}" rel="stylesheet">
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet"> 
<link href="{{asset('css/estilosadmin.css')}}" rel="stylesheet">
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet"> 
  <link href="{{asset('css/estilosadmin.css')}}" rel="stylesheet">
@endsection

@section('contenido')

<h1 class="text-center">Usuarios</h1>

	  <div class="row usuario">
	  <div class="col-md-offset-2 col-md-8 col-md-offset-2">
	 
@include('flash::message')
	<table class="table table-striped usuario" >
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo De Usuario</th>
			<th>Acción</th>
		</thead>

		<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }} </td>
						<td>{{ $user->name }} </td>
						<td>{{ $user->email }} </td>
						<td>
						@if($user->type =="admin")
						<span class="label label-danger">{{ $user->type }} </span>
						@endif
						@if($user->type =="DT")
						<span class="label label-warning">{{ $user->type }} </span>
						@endif
						@if($user->type =="inovacion")
						<span class="label label-info">{{ $user->type }} </span>
						@endif
						@if($user->type =="difucion")
						<span class="label label-success">{{ $user->type }} </span>
						@endif
						@if($user->type =="cecodic")
						<span class="label label-primary">{{ $user->type }} </span>
						@endif
						@if($user->type =="transparencia")
						<span class="label label-default">{{ $user->type }} </span>
						@endif
						</td>
						<td> <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning glyphi" data-toggle="tooltip" data-placement="left" title="Modifica el usuario"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

						<a href="{{route('admin.users.destroy',$user->id)}} " class="btn btn-danger" onclick="return confirm('¿Seguro que deseas borrar este usuario?')" data-toggle="tooltip" data-placement="right" title="Borra el usuario"><span class=" glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a> 

						</td>
					</tr>	
				@endforeach

		</tbody>

	</table>
			
		<a href="crearusuario" class="btn btn-info gr" data-toggle="tooltip" data-placement="right" title="redirige ala pagina para crear un usuario">Crear nuevo usuario</a>

</div>
 </div>
 {!! $users->render() !!}
@endsection
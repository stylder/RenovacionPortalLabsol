@extends('admin.users.plantillaadmin')

	<?php if (Auth::user()):?> 
       @section('title',Auth::user()->type.' | Registrar Usuario')
    <?php endif ?>



@section('css')
 
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet"> 
<link href="{{asset('css/estilosadmin.css')}}" rel="stylesheet">
  
  


@endsection

@section('contenido')
<div class="panel panel-default">
  <div class="panel-heading">CREAR USUARIO</div>
  <div class="panel-body">
    {!!Form::open(['url' => url("admin/store"), 'method'=>'POST'] )!!}
@include('flash::message')
<div class="container esad">
<div class="row form-ad" align ="center">
<div class ="form-group ">
{!! form:: label('name','Nombre') !!}
{!! form::text('name',null,['class'=>'form-control','placeholder' => 'Nombre Completo' ,'required']) !!}
</div>

<div class ="form-group">
{!! form:: label('email','Correo Electronico') !!}
{!! form:: email('email',null,['class'=>'form-control','placeholder' => 'ejemplo@gmail.com' ,'required']) !!}
</div>
<div class ="form-group">
{!! form:: label('password','Contraseña') !!}
{!! form:: password('password',['class'=>'form-control','placeholder' => '*********' ,'required']) !!}
</div>
<div class ="form-group">
{!! form:: label('type','Tipo de Usuario') !!}
{!! Form:: select('type', ['DT'=>'Desarrollo de Talento','admin'=>'administrador','inovacion'=>'inovacion' ,'difucion'=>'Difucion' ,'cecodic'=>'Cecodic' ,'transparencia'=>'Transparencia'], null, ['class'=>'form-control','placeholder' => 'Seleccione Tipo de Usuario',]) !!}
</div>
<div class ="form-group">
{!! form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
</div>
</div>
</div>
{!!Form::close()!!}
  </div>
</div>

@endsection
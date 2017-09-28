@extends('publicaciones.plantilla')
@section('contenido')

@foreach( $publicacion as $public)
<?php $titulo= $public->title ?>
{!! $public->content !!}


@endforeach

@section('title',"$titulo")

@endsection
@extends('plantilla')

@section('title','Publicaciones | COZCyT')
@section('contenido')
    @include('flash::message')

    <br><br>
    <div class="row">


        @foreach($publicacion as $publica)
            <div class=" col-md-6">


                <div>
                    <div class="panel panel-default">
                        <h3 class="text-center"> {{ $publica->title}}</h3>
                        <hr>
                        <div class="panel-body">
                            <a href="{{asset('publicaciones/' .$publica->url)}}" class="thumbnail">


                                <img class="  mediana" src="{{asset('storage/' . $publica->imagen)}}" alt="...">


                            </a>

                        </div>
                    </div>
                </div>


            </div>
        @endforeach


    </div>

@endsection
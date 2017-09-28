@extends('admin.users.plantillaadmin')

	<?php if (Auth::user()):?> 
       @section('title',Auth::user()->type.' | Subir Imagen')
    <?php endif ?>

			<!-- Form Name -->
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet"> 
<link href="{{asset('css/estilosadmin.css')}}" rel="stylesheet">
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet"> 
  <link href="{{asset('css/estilosadmin.css')}}" rel="stylesheet">
@endsection
@section('contenido')
<div class="container">
        <div class="row" align="center" >
            <div class="panel panel-primary panel-imagen">
                <div class="panel-heading text-left" >
                    Cargar archivos 
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=> 'file.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                    <div class="dz-message" style="height:200px;">
                        Arrasta aqui el archivo..
                    </div>
                    <div class="dropzone-previews"></div>
                    <button type="submit" class="btn btn-success" id="submit">Guardar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! Html::script('js/dropzone.js'); !!}
    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            
           	acceptedFiles: '.jpeg,.jpg,.png',
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>
@endsection
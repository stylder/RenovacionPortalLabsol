@if(Session::has('message-datosIncorrectos'))
<?php $errores = Session::get('message-datosIncorrectos');?>
<div class="alert alert-danger alert-dismissible" role="alert" >
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	@foreach($errores as $error)
		<ul>
			<li>{!! $error !!}</li>
		</ul>
	@endforeach
</div>
@endif
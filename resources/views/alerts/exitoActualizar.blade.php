@if(Session::has('message-exitoActualizar'))
<div class="alert alert-success alert-dismissible" role="alert" >
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<ul>
			<li>{!! Session::get('message-exitoActualizar') !!}</li>
		</ul>
</div>
@endif
 @extends('plantilla')

@section('title','Revista EEK | COZCyT')

@section('contenido')

        <div class="row">
        	<div class="col-md-12">
        		<div class="banner-w3agile">
					<h3><a href="Inicio">Inicio</a>  <span>/Revista eek'</span></h3>
				</div>
	
	 	
	 		<div class="content">
				<div class="projects-agile">
					<div class="row eim">				
						<div class="col-md-offset-3 col-md-6">												  
				 			<img src="{{asset('img/bannereeknew.jpg')}}" alt="" class="img-responsive" />
			    		</div>
			    	</div>

					<div class="portfolio_grid_w3lss">
	 						@foreach($publicacion as $publica)  										      
							<div class="col-xs-6 col-sm-2 w3agile_Projects_grid">

								<div class="w3agile_Projects_image">	
										<figure>
											<a href="{{asset($publica->url)}}" target="blank">
												<img src="{{asset('storage/'. $publica->imagen)}}" alt="" class="img-responsive" />
											
											<figcaption>
												<h4>Revista EEK'</h4>
												<p>
													{{$publica->title}}
												</p>
											</figcaption>
											</a>
										</figure>
								</div>
							</div>

							@endforeach
       				</div>

					<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
			</div>
		</div>
		</div>
		</div>
		@stop

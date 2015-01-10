@extends('protected.admin.master')

@section('title', 'Ver Centro de Costo')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class=" text-default text-center">Detalles del Centro de Costos</h3>
		 	</div>
	  		<div class="panel-body">
				<br>
					<fieldset>
						<ul>
							<div class="col-md-12 column">
								<div class="form-group">
									<h4 class="text-center">Centro de Costo:</h4>
									<h3 style="text-align:left;"> {{ $cost_center->name}} </h3>
								</div>
							</div>
							<div class="col-md-12 column">
								<div class="form-group">
									<h4 class="text-center">Dirección:</h4>
									<h3> {{ $cost_center->address}} </h3>
								</div>
							</div>	
						</ul>
					</fieldset>
					<div class="col-md-10 col-md-offset-1">
						@if(Sentry::check())
							{{ link_to_route('admin.cost_centers.edit', 'Editar Centro de Costo', $cost_center->id, ['class' => 'btn btn-primary btn-block']) }}
							{{ link_to('admin/', 'Atras', ['class' => 'btn btn-success btn-block']) }}
						@endif
					</div>
				<br>
				<br>

			</div>
		</div>			
	</div>
@stop
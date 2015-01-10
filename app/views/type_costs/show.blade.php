@extends('protected.admin.master')

@section('title', 'Ver Control de Gastos')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class=" text-default text-center">Detalles del Control Gasto</h3>
		 	</div>
	  		<div class="panel-body">
				<br>
					<fieldset>
						<ul>
							<div class="col-md-6 column">
								<div class="form-group">
									<h4 style="text-align:left;" class="text-center">Fecha:</h4>
									<h3> {{ $type_cost->date_cost}} </h3>
								</div>
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									<h4 style="text-align:left;" class="text-center">Concepto:</h4>
									<h3> {{ $type_cost->concept_cost}} </h3>
								</div>
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									<h4 style="text-align:left;" class="text-center">Usuario:</h4>
									<h3> {{ $type_cost->user_id}} </h3>
								</div>
							</div>	
						</ul>
					</fieldset>
					<div class="col-md-10 col-md-offset-1">
						@if(Sentry::check())
							{{ link_to_route('admin.type_costs.edit', 'Editar Centro de Costo', $type_cost->id, ['class' => 'btn btn-primary btn-block']) }}
							{{ link_to('admin/', 'Atras', ['class' => 'btn btn-success btn-block']) }}
						@endif
					</div>
				<br>
				<br>

			</div>
		</div>			
	</div>
@stop
@extends('protected.admin.master')

@section('title', 'Ver Departamento')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class=" text-default text-center">Detalles del Departamento</h3>
		 	</div>
	  		<div class="panel-body">
				<br>
					<fieldset>
						<ul>
							<div class="col-md-12 column">
								<div class="form-group">
									<h4 class="text-center">Nombre del Departamento:</h4>
									<h3 style="text-align:left;"> {{ $department->name_department}} </h3>
								</div>
							</div>
							<div class="col-md-12 column">
								<div class="form-group">
									<h4 class="text-center">Centro de Costo:</h4>
									<h3> {{ $department->cost_center}} </h3>
								</div>
							</div>
							<div class="col-md-12 column">
								<div class="form-group">
									<h4 class="text-center">Detalles del Centro de Costo:</h4>
									<h3> {{ $department->cost_center_description}} </h3>
								</div>
							</div>		
						</ul>
					</fieldset>
					<div class="col-md-10 col-md-offset-1">
						@if(Sentry::check())
							{{ link_to_route('admin.departments.edit', 'Editar Centro de Costo', $department->id, ['class' => 'btn btn-primary btn-block']) }}
							{{ link_to('admin/departments', 'Atras', ['class' => 'btn btn-success btn-block']) }}
						@endif
					</div>
				<br>
				<br>

			</div>
		</div>			
	</div>
@stop
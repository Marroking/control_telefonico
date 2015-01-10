@extends('protected.admin.master')

@section('title', 'Editar Centro de Costos')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="text-center">Editar Centro de Costos</h3>
		 	</div>
	  		<div class="panel-body">
				{{ Form::model($cost_center, array('method' => 'PATCH', 'route' =>array('cost_centers.update', $cost_center->id)))  }}
				 	<fieldset>
	         			@if (Session::has('flash_message'))
							<div class="form-group">
								<p>{{ Session::get('flash_message') }}</p>
							</div>
						@endif
						<div class="form-group">
							{{ Form::label('name', 'Nombre del Centro de Costos:') }}
							{{ Form::text('name', null, ['class' => 'form-control']) }}
							{{ errors_for('name', $errors) }}
						</div>
						<div class="form-group">
							{{ Form::label('address', 'Dirección:') }}
							{{ Form::text('address', null, ['class' => 'form-control']) }}
							{{ errors_for('address', $errors) }}
						</div>
						<div class="form-group">
							{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
							{{ link_to('admin/cost_centers', 'Atras', ['class' => 'btn btn-success btn-block']) }}
						</div>
						<br>
					</fieldset>
				{{ Form::close() }}

			</div>
		</div>
	</div>
@stop
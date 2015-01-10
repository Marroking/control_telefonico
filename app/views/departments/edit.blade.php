@extends('protected.admin.master')

@section('title', 'Editar Departamento')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="text-center">Editar Despartamento</h3>
		 	</div>
	  		<div class="panel-body">
				{{ Form::model($department, array('method' => 'PATCH', 'route' =>array('departments.update', $department->id)))  }}
				 	<fieldset>
	         			@if (Session::has('flash_message'))
							<div class="form-group">
								<p>{{ Session::get('flash_message') }}</p>
							</div>
						@endif
						<div class="form-group">
							{{ Form::label('name_department', 'Nombre del Departamento:') }}
							{{ Form::text('name_department', null, ['class' => 'form-control']) }}
							{{ errors_for('name_department', $errors) }}
						</div>
						<div class="form-group">
							{{ Form::label('cost_center', 'Centro de Costos:') }}
							{{ Form::text('cost_center', null, ['class' => 'form-control']) }}
							{{ errors_for('cost_center', $errors) }}
						</div>
						<div class="form-group">
							{{ Form::label('cost_center_description', 'Descripción del Centro de Costos:') }}
							{{ Form::textarea('cost_center_description', null, ['size' => '0x5', 'class' => 'form-control']) }}
							{{ errors_for('cost_center_description', $errors) }}
						</div>
						<div class="form-group">
							{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
							{{ link_to('admin/departments', 'Atras', ['class' => 'btn btn-success btn-block']) }}
						</div>
						<br>
					</fieldset>
				{{ Form::close() }}

			</div>
		</div>
	</div>
@stop
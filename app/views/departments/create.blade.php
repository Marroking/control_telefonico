@extends('protected.admin.master')

@section('title', 'Crear Centro de Costo')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
	  	<div class="panel-heading">
	    	<h3 class="text-center">Registrar Departamento</h3>
	 	</div>
  	<div class="panel-body">
			{{ Form::open(array('method'=>'post', 'url' => 'departments')) }}
			 	<fieldset>
         	@if (Session::has('flash_message'))
						<div class="form-group">
							<p>{{ Session::get('flash_message') }}</p>
						</div>
					@endif

					<div class="form-group">
						{{ Form::text('name_department', null, ['placeholder' => 'Nombre del Departamento:', 'class' => 'form-control'])}}
						{{ errors_for('name_department', $errors) }}
					</div>

					<div class="form-group">
						{{ Form::text('cost_center', null, ['placeholder' => 'Centro de Costos:', 'class' => 'form-control'])}}
						{{ errors_for('cost_center', $errors) }}
					</div> 

					<div class="form-group">
						{{ Form::textarea('cost_center_description', null, ['size' => '0x5', 'placeholder' => 'Descripción del Centro de Costos:', 'class' => 'form-control']) }}
						{{ errors_for('cost_center_description', $errors) }}
					</div> 
					


					<div class="form-group">
						{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
						{{ link_to('admin/departments', 'Atras', ['class' => 'btn btn-success btn-block']) }}
						<br>
					</div>
					
				</fieldset>
			{{ Form::close() }}
		</div>
	</div>
@stop
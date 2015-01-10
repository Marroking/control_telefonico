@extends('protected.admin.master')

@section('title', 'Crear Centro de Costo')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
	  	<div class="panel-heading">
	    	<h3 class="text-center">Registrar Centro de Costo</h3>
	 	</div>
  	<div class="panel-body">
			{{ Form::open(array('method'=>'post', 'url' => 'cost_centers')) }}
			 	<fieldset>
         	@if (Session::has('flash_message'))
						<div class="form-group">
							<p>{{ Session::get('flash_message') }}</p>
						</div>
					@endif

					<div class="form-group">
						{{ Form::text('name', null, ['placeholder' => 'Nombre del Centro de Costos', 'class' => 'form-control'])}}
						{{ errors_for('name', $errors) }}
					</div>

					<div class="form-group">
						{{ Form::text('address', null, ['placeholder' => 'Dirección', 'class' => 'form-control'])}}
						{{ errors_for('address', $errors) }}
					</div> 

					<div class="form-group">
						{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
						{{ link_to('admin/cost_centers', 'Atras', ['class' => 'btn btn-success btn-block']) }}
						<br>
					</div>
					
				</fieldset>
			{{ Form::close() }}
		</div>
	</div>
@stop
@extends('protected.admin.master')

@section('title', 'Editar Información del Celular')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="text-center">Editar Datos del Celular</h3>
		 	</div>
	  		<div class="panel-body">
				{{ Form::model($cellphone, array('method' => 'PATCH', 'route' =>array('cellphones.update', $cellphone->id)))  }}
				 	<fieldset>
	         			@if (Session::has('flash_message'))
							<div class="form-group">
								<p>{{ Session::get('flash_message') }}</p>
							</div>
						@endif
						<div class="col-md-6 column">
							<div class="form-group" >
								{{ Form::label('number', 'Número Telefónico:') }}
								{{ Form::text('number', null, ['class' => 'form-control'])}}
								{{ errors_for('modnumberel', $errors) }}
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group" >
								{{ Form::label('name', 'Modelo:') }}
								{{ Form::text('model', null, ['class' => 'form-control'])}}
								{{ errors_for('model', $errors) }}
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group" >
								{{ Form::label('trade_mark', 'Marca:') }}
								{{ Form::text('trade_mark', null, ['class' => 'form-control'])}}
								{{ errors_for('trade_mark', $errors) }}
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group" >
								{{ Form::label('company', 'Compañia:') }}
								{{ Form::text('company', null, ['class' => 'form-control'])}}
								{{ errors_for('company', $errors) }}
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group" >
								{{ Form::label('imei', 'N° IMEI:') }}
								{{ Form::text('imei', null, ['class' => 'form-control'])}}
								{{ errors_for('imei', $errors) }}
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group" >
								{{ Form::label('plan_name', 'Nombre del plan:') }}
								{{ Form::text('plan_name', null, ['class' => 'form-control'])}}
								{{ errors_for('plan_name', $errors) }}
							</div>
						</div>
						<div class="col-md-12 column">
							<div class="form-group" >
								{{ Form::label('plan_description', 'Descripción del Plan:') }}
								{{ Form::textarea('plan_description', null, ['size' => '0x5', 'class' => 'form-control']) }}
								{{ errors_for('plan_description', $errors) }}
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group" >
								{{ Form::label('plan_cost', 'Costo del plan:') }}
								{{ Form::text('plan_cost', null, ['class' => 'form-control'])}}
								{{ errors_for('plan_cost', $errors) }}
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group" >
								{{ Form::label('plan_iva_cost', 'Costo del plan con IVA:') }}
								{{ Form::text('plan_iva_cost', null, ['class' => 'form-control'])}}
								{{ errors_for('plan_iva_cost', $errors) }}
							</div>
						</div>
						{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
						{{ link_to('admin/cellphones', 'Atras', ['class' => 'btn btn-success btn-block']) }}
						<br>
						<br>
					</fieldset>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop
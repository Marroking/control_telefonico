@extends('master')

@section('title', 'Edit Profile')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
 		<div class="panel panel-default">
	  	<div class="panel-heading">
		    <h3 class="text-center">Editar Mis Datos</h3>
		 	</div>
			@if (Session::has('flash_message'))
				<div class="form-group">
					<p style="padding: 5px; margin:10px;" class="bg-success">{{ Session::get('flash_message') }}</p>
				</div>
			@endif
			{{ Form::model($user, ['method' => 'PATCH', 'route' => ['profiles.update', $user->id]]) }}
				<div style="margin: 15px;">
					<div class="col-md-6 column">
						<div class="form-group" style="margin-left: -13px;">
							{{ Form::label('first_name', 'Nombre(s):') }}
							{{ Form::text('first_name', null, ['class' => 'form-control']) }}
							{{ errors_for('first_name', $errors) }}
						</div>
					</div>
					<div class="col-md-6 column">
						<div class="form-group" style="margin-right: -13px;">
							{{ Form::label('last_name', 'Apellidos:') }}
							{{ Form::text('last_name', null, ['class' => 'form-control']) }}
							{{ errors_for('last_name', $errors) }}
						</div>
					</div>
					<div class="col-md-6 column">
						<div class="form-group" style="margin-right: -13px;">
							{{ Form::label('employee_id', 'Número de colaborador:') }}
							{{ Form::text('employee_id', null, ['class' => 'form-control']) }}
							{{ errors_for('employee_id', $errors) }}
						</div>
					</div>
					<div class="col-md-6 column">
						<div class="form-group" style="margin-right: -13px;">
							{{ Form::label('radio', 'Radio:') }}
							{{ Form::text('radio', null, ['class' => 'form-control'])}}
							{{ errors_for('radio', $errors) }}
						</div>
					</div>
					<div class="col-md-12 column">
						<div class="form-group" style="margin-left: -13px;">
							{{ Form::label('email', 'Email:') }}
							{{ Form::email('email', null, ['class' => 'form-control']) }}
							{{ errors_for('email', $errors) }}
						</div>
					</div>
					<p class="text-center">Si no quieres actualizar la contraseña, deja el campo en blanco.</p>
					<div class="col-md-12 column">
						<div class="form-group" style="margin-left: -13px;">
							{{ Form::label('password', 'Contraseña:') }}
							{{ Form::password('password', ['class' => 'form-control']) }}
							{{ errors_for('password', $errors) }}
						</div>
					</div>
					<div class="col-md-12 column">
						<div class="form-group" style="margin-left: -13px;">
							{{ Form::label('password_confirmation', 'Confirmar Contraseña:') }}
							{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="col-md-6 column">
						<div class="form-group">
						</div>  
					</div>

					<div class="form-group">
						{{ Form::submit('Actualizar Perfil', ['class' => 'btn btn-primary btn-block']) }}
						{{ link_to('admin/', 'Atras', ['class' => 'btn btn-success btn-block']) }}					
						<br>
						<br>
					</div>
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop

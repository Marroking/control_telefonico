@extends('protected.admin.master')

@section('title', 'Edit Profile')

@section('content')

	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
 		<div class="panel panel-default">
	  	<div class="panel-heading">
		    <h3 class="text-center">Editar Usuario</h3>
		 	</div>
				@if (Session::has('flash_message'))
					<div class="form-group">
						<p style="padding: 5px; margin:10px;" class="bg-success">{{ Session::get('flash_message') }}</p>
					</div>
				@endif
					{{ Form::model($user, ['method' => 'PATCH', 'route' => ['admin.profiles.update', $user->id]]) }}
						<div style="margin: 15px;">
							<div class="col-md-6 column">
								<div class="form-group">
									{{ Form::label('first_name', 'Nombre(s):') }}
									{{ Form::text('first_name', null, ['class' => 'form-control']) }}
									{{ errors_for('first_name', $errors) }}
								</div>
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									{{ Form::label('last_name', 'Apellidos:') }}
									{{ Form::text('last_name', null, ['class' => 'form-control']) }}
									{{ errors_for('last_name', $errors) }}
								</div>
							</div>
							<div class="col-md-12 column">
								<div class="form-group">
									{{ Form::label('account_type', 'Tipo de cuenta:') }}
									{{ Form::select('account_type', $groups, $user_group, ['class' => 'form-control']) }}
									{{ errors_for('account_type', $errors) }}
								</div>
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									{{ Form::label('radio', 'Radio:') }}
									{{ Form::text('radio', null, ['placeholder' => 'Radio:', 'class' => 'form-control'])}}
									{{ errors_for('radio', $errors) }}
								</div>
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									{{ Form::label('employee_id', 'Número de colaborador:') }}
									{{ Form::text('employee_id', null, ['class' => 'form-control']) }}
									{{ errors_for('employee_id', $errors) }}
								</div>
							</div>
							
							<div class="col-md-12 column">
								<div class="form-group">
									{{ Form::label('email', 'Email:') }}
									{{ Form::email('email', null, ['class' => 'form-control']) }}
									{{ errors_for('email', $errors) }}
								</div>
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									{{ Form::label('cost_center_id', 'Centro de Costos:') }}
									{{ Form::select('cost_center_id', $cost_centers , Input::old('cost_center_id'), ['class' => 'form-control'])}}
									{{ errors_for('cost_center_id', $errors) }}
								</div> 
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									{{ Form::label('department_id', 'Departamento:') }}
									{{ Form::select('department_id', $departments , Input::old('department_id'), ['class' => 'form-control'])}}
									{{ errors_for('department_id', $errors) }}
								</div> 
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									{{ Form::label('cellphone_id', 'Número Telefónico:') }}
									{{ Form::select('cellphone_id', $cellphones , Input::old('cellphone_id'), ['class' => 'form-control'])}}
									{{ errors_for('cellphone_id', $errors) }}
								</div> 
							</div>
							<div class="col-md-12 column">
								<p class="text-center">Si no quieres actualizar la contraseña, deja el campo en blanco.</p>
							</div>
							<div class="col-md-6 column">
								<div class="form-group" style="margin-left: -13px;">
									{{ Form::label('password', 'Contraseña:') }}
									{{ Form::password('password', ['class' => 'form-control']) }}
									{{ errors_for('password', $errors) }}
								</div>
							</div>
							<div class="col-md-6 column">
								<div class="form-group" style="margin-right: -13px;">
									{{ Form::label('password_confirmation', 'Confirmar Contraseña:') }}
									{{ Form::password('password_confirmation', ['class' => 'form-control'] )}}
								</div>
							</div>
							<div class="form-group">
								{{ Form::submit('Actualizar Perfil', ['class' => 'btn btn-primary btn-block']) }}
								{{ link_to('admin/profiles', 'Atras', ['class' => 'btn btn-success btn-block']) }}
							</div>
							<br>
						</div>
					{{ Form::close() }}
			</div>
		</div>
	</div>

@stop
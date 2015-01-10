@extends('master')
@section('title', 'Register')
@section('content')
	<div class="container">
	  <div class="row">
			<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
	   		<div class="panel panel-default">
			  	<div class="panel-heading">
				    <h3 class="text-center">Registro de Usuario</h3>
				</div>
				  	<div class="panel-body">
				  		<fieldset>
				    		{{ Form::open(['route' => 'registration.store']) }}
	               				 @if (Session::has('flash_message'))
									<div class="form-group">
										<p>{{ Session::get('flash_message') }}</p>
									</div>
								@endif
								<div class="col-md-6 column">
									<div class="form-group">
										{{ Form::text('first_name', null, ['placeholder' => 'Nombre(s):', 'class' => 'form-control'])}}
										{{ errors_for('first_name', $errors) }}
									</div>
								</div>
								<div class="col-md-6 column">
									<div class="form-group">
										{{ Form::text('last_name', null, ['placeholder' => 'Apellidos:', 'class' => 'form-control'])}}
										{{ errors_for('last_name', $errors) }}
									</div>
								</div>

								<div class="col-md-12">
									<div class="control-group">
	                                    <div class="input-group">
	                                     	<span class="input-group-addon">@</span>
											{{ Form::text('email', null, ['placeholder' => 'Correo Electrónico:', 'class' => 'form-control'])}}
										</div>
											{{ errors_for('email', $errors) }}
	                                </div>
								</div>
								<br>

								<div class="col-md-6 column" style="margin-top: 18px;">
									<div class="form-group" >
										{{ Form::text('radio', null, ['placeholder' => 'Radio:', 'class' => 'form-control'])}}
										{{ errors_for('radio', $errors) }}
									</div>
								</div>

								<div class="col-md-6 column" style="margin-top: 18px;">
									<div class="form-group" >
										{{ Form::text('employee_id', null, ['placeholder' => 'N° de colaborador:', 'class' => 'form-control'])}}
										{{ errors_for('employee_id', $errors) }}
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom:20px;">
									<div class="control-group">
	                                    <div class="input-group">
	                                     	<span class="input-group-addon">*</span>
											{{ Form::password('password', ['placeholder' => 'Contraseña:', 'class' => 'form-control'])}}
										</div>
											{{ errors_for('password', $errors) }}	                                
									</div>
								</div>
								<div class="col-md-12">
									<div class="control-group">
	                                    <div class="input-group">
	                                     	<span class="input-group-addon">*</span>
											{{ Form::password('password_confirmation', ['placeholder' => 'Confirmar Contraseña:', 'class' => 'form-control'])}}
										</div>
									</div>
								</div>
								<div class="col-md-6 column">
									<div class="form-group">
										<br>
										{{ Form::select('cost_center_id', [null=>'Elige Centro de Costo:'] + $cost_centers , Input::old('cost_center_id'), ['class' => 'form-control'])}}
										{{ errors_for('cost_center_id', $errors) }}
									</div> 
								</div>
								<div class="col-md-6 column">
									<div class="form-group">
										<br>
										{{ Form::select('department_id', [null=>'Elige Departamento:'] + $departments , Input::old('department_id'), ['class' => 'form-control'])}}
										{{ errors_for('department_id', $errors) }}
									</div> 
								</div>
								<div class="col-md-6 column">
									<div class="form-group">
										<br>
										{{ Form::select('cellphone_id', [null=>'Elige Celular:'] + $cellphones , Input::old('cellphone_id'), ['class' => 'form-control'])}}
										{{ errors_for('cellphone_id', $errors) }}
									</div> 
								</div>
								<!--  @include('registration/_cellphone_form'); -->
					      		<div class="col-md-12 column">
						      		{{ Form::submit('Crear Cuenta', ['class' => 'btn btn-lg btn-success btn-block']) }}
						      		<br>
						      		<p style="text-align:center">¿Ya tienes cuenta? <a href="/login">Inicia Sesión</a></p>
					      		</div>
							{{ Form::close() }}
				     	</fieldset>
				    </div>
				</div>
			</div>
		</div>
	</div>
@stop
@extends('master')

@section('title', 'Login')

@section('content')
	<div class="container">
	    <div class="row">
			<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class=" text-default text-center ">Inicia Sesión</h3>
				 	</div>
				  	<div class="panel-body">
				    	{{ Form::open(['route' => 'sessions.store']) }}
	                    <fieldset>
	                    	@if (Session::has('flash_message'))
								<p style="padding:5px" class="bg-success text-success">{{ Session::get('flash_message') }}</p>
							@endif
							@if (Session::has('error_message'))
								<p style="padding:5px" class="bg-danger text-danger">{{ Session::get('error_message') }}</p>
							@endif
							<div class="form-group">
								{{ Form::text('email', null, ['placeholder' => 'Correo Electronico', 'class' => 'form-control', 'required' => 'required'])}}
								{{ errors_for('email', $errors) }}
							</div>
							<div class="form-group">
								{{ Form::password('password', ['placeholder' => 'Contraseña','class' => 'form-control', 'required' => 'required'])}}
								{{ errors_for('password', $errors) }}
							</div>
							<div class="form-group">
								{{ Form::label('remember', '¿Recordar mi contraseña? ')}}
								{{ Form::checkbox('remember', 'remember') }}
							</div>
							<div class="form-group">
								{{ Form::submit('Iniciar Sesión', ['class' => 'btn btn btn-lg btn-success btn-block']) }}
								<br>
								<p style="text-align:center">¿Aún no tienes cuenta? <a href="/register">Registrate</a></p>
							</div>
				    	</fieldset>
				      	{{ Form::close() }}
				    </div>
				</div>
			</div>
		</div>
	</div>
@stop
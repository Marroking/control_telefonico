@extends('protected.admin.master')

@section('title', 'View Profile')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="text-center">Detalles del Usuario</h3>
		 	</div>
	  		<div class="panel-body">
				<fieldset>
					<ul>
						<div class="col-md-12 column">
							<div class="form-group">
								<h4 style="color:white">Nombre Completo: </h4> <h3> {{ $user->first_name }}  {{ $user->last_name }}</h3>
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group">
								<h4 style="color:white">N° de Colaborador: </h4> <h3> {{ $user->employee_id }} </h3>					
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group">
								<h4 style="color:white">Radio: </h4> <h3> {{ $user->radio }} </h3>					
							</div>
						</div>
						<!--
						<div class="col-md-6 column">
							<div class="form-group">
								<h4 style="color:white">Departamento: </h4> <h3> {{ $user->department_id }} </h3>		
							</div>
						</div>
						<div class="col-md-6 column">
							<div class="form-group">
								<h4 style="color:white">Centro de Costo: </h4> <h3> {{ $user->cost_center_id }} </h3>					
							</div>
						</div>
						-->
						<div class="col-md-6 column">
							<div class="form-group">
								<h4 style="color:white">Correo Electrónico: </h4> <h3> {{ $user->email }} </h3>					
							</div>
						</div>
					</ul>
				</fieldset>
				@if(Sentry::check())
					{{ link_to_route('admin.profiles.edit', 'Editar Perfil', $user->id, ['class' => 'btn btn-primary btn-block']) }}
					{{ link_to('admin/profiles', 'Atras', ['class' => 'btn btn-success btn-block']) }}
				@endif
				<br>
			</div>
		</div>
	</div>
	<!--
	<div class="col-md-6 col-md-offset-3">
		<h2 class="text-success text-center">
			Perfil de: {{ $user->first_name }} {{ $user->last_name }}
		</h2>
		<br>
		<fieldset>
			<ul>
				<div class="col-md-6 column">
					<div class="form-group">
					<h4 class="text-primary">Nombre(s): </h4> <h3> {{ $user->first_name }} </h3>
					</div>
				</div>
				<div class="col-md-6 column">
					<div class="form-group">
						<h4 class="text-primary">Apellidos: </h4> <h3> {{ $user->last_name }} </h3>					
					</div>
				</div>
				<div class="col-md-6 column">
					<div class="form-group">
						<h4 class="text-primary">Teléfono: </h4> <h3> {{ $user->telephone }} </h3>					
					</div>
				</div>
				<div class="col-md-6 column">
					<div class="form-group">
						<h4 class="text-primary">Radio: </h4> <h3> {{ $user->radio }} </h3>					
					</div>
				</div>
				<div class="col-md-6 column">
					<div class="form-group">
						<h4 class="text-primary">Correo Electrónico: </h4> <h3> {{ $user->email }} </h3>					
					</div>
				</div>
			</ul>
		</fieldset>
			<br>
			@if(Sentry::check())
				{{ link_to_route('admin.profiles.edit', 'Editar Perfil', $user->id, ['class' => 'btn btn-primary btn-block']) }}
				{{ link_to('admin/profiles', 'Atras', ['class' => 'btn btn-success btn-block']) }}
			@endif
	</div>
	-->
@stop
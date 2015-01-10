@extends('master')

@section('title', 'View Profile')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="text-center">Detalles de mi Perfil</h3>
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
						<div class="col-md-6 column">
							<div class="form-group">
								<h4 style="color:white">Correo Electrónico: </h4> <h3> {{ $user->email }} </h3>					
							</div>
						</div>
					</ul>
				</fieldset>
				@if(Sentry::check())
					{{ link_to_route('profiles.edit', 'Editar tu perfil', $user->id, ['class' => 'btn btn-primary btn-block']) }}
					{{ link_to('/', 'Atras', ['class' => 'btn btn-success btn-block']) }}
				@endif
				<br>
			</div>
		</div>
	</div>
@stop
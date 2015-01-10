@extends('protected.admin.master')

@section('title', 'Admin Dashboard')

@section('content')

	@if (Session::has('flash_message'))
			<p>{{ Session::get('flash_message') }}</p>
	@endif


	<div class="jumbotron">
		<h1 style="text-align:center;">Página del Adminsitrador</h1>
		<p>Este apartado es sólo para los Administradores el sitio</p>
		<p>Este sitio ha sido desarrollado para llevar el control de gastos telefónicos de los colaboradores</p>

		<h4  class="text-default">
			<ul>
				<li>
					Permite registrar a los colaboradores que cuenten con telégfono celular.
				</li>
				<li>
					Integra Inicio de sesión y manejo de usuarios
				</li>
				<li>
					Cuenta con niveles de seguridad los cuales brindan o reestringen el acceso a ciertos usuarios.
				</li>
				<li>
					Permitirá generar reportes en PDF
				</li>
			</ul>
		</h4>
	</div>


@stop
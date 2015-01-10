@extends('protected.admin.master')

@section('title', 'Lista de Usuarios')

@section('content')
	<h1 class="text-info text-center">
		Lista de usuarios
	</h1>
	<div class="table-responsive">
		<table class="table table-condensed table-hover">
			<thead>
				<tr class="success">
					<h1>
					  <th>Clave</th>
					  <th>Email</th>
					  <th>Nombre Completo
					  <th class="text-center" style="color:black;">Opciones</th>
					</h1>
				</tr>
			</thead>
			<tbody>
			@foreach ($users as $user)
				<tr class="warning">
					<td>{{ $user->id }}</td>
			    <td>
			    	@if ($user->inGroup($admin))
				    	<span class="label label-info">{{ 'Administrador' }}</span>
				    @else
				    	<span class="label label-success">{{ 'Usuario' }}</span>
				    @endif
			    	{{ $user->email}}
			    </td>
			    <td>
			    	{{ $user->first_name}} {{ $user->last_name}}
			    </td>
			    <td class="text-center">
			    	{{ link_to_route('admin.profiles.show', 'Ver', $user->id, ['class' => 'btn btn-primary']) }}
			    	{{ link_to_route('admin.profiles.edit', 'Editar Perfil', $user->id, ['class' => 'btn btn-warning']) }}
			    </td>
			 </tr>
			@endforeach
			</tbody>
		</table>
	</div>
	{{ link_to('admin/', 'Atras', ['class' => 'btn btn-success btn-block']) }}
@stop
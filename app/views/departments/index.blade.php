@extends('protected.admin.master')

@section('title', 'Lista de Departamentos')

@section('content')
    @if (Session::has('message'))
      <div class="flash alert-primary">
        <p style="padding:5px" class="bg-success text-success">{{ Session::get('message') }} </p>
      </div>
    @endif
      <h1 class="text-info text-center">
        Departamentos
      </h1>
      <p>{{ link_to_route('departments.create', 'Generar Nuevo Departamento', null, ['class' => 'btn btn-danger']) }}
      @if ($departments->count())
        <div class="table-responsive">  
          <table class="table table-condensed table-hover">        		<thead>
              <tr class="success">
                <th>Clave</th>
                <th>Nombre del Departamento</th>
                <th>Centro de Costos</th>
                <th>Descripción del Centro de Costos</th>
                <th class="text-center" style="color:black;">Opciones</th>
              </tr>
            </thead>
          	<tbody>
          		@foreach ($departments as $department)
            		<tr class="warning">
              		<td>{{ $department->id }}</td>
        	        <td>{{ $department->name_department}}<br>
        	        <td>{{ $department->cost_center}}<br>
        	        <td>{{ $department->cost_center_description}}</td>
        	        <th class="text-center" >
        	        	{{ link_to_route('departments.edit', 'Editar ', $department->id, ['class' => 'btn btn-primary']) }}
                    {{ link_to_route('departments.show', 'Ver Detalles', $department->id, ['class' => 'btn btn-warning']) }}  
                  {{--
                    {{ Form::open(array('method'=> 'DELETE', 'route' => array('departments.destroy', $department->id))) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                  --}}
                  </td>
        	     </tr>
        			@endforeach
          	</tbody>
        	</table>
        </td>
        {{ link_to('admin/', 'Atras', ['class' => 'btn btn-success btn-block']) }}
      @endif
@stop
@extends('protected.admin.master')

@section('title', 'Lista de Centros de Costo')

@section('content')
    @if (Session::has('message'))
      <div class="flash alert-primary">
        <p style="padding:5px" class="bg-success text-success">{{ Session::get('message') }} </p>
      </div>
    @endif
      <h1 class="text-info text-center">
        Centros de Costos
      </h1>
      <p>{{ link_to_route('cost_centers.create', 'Generar Nuevo Almacén', null, ['class' => 'btn btn-danger']) }}
      @if ($cost_centers->count())
        <div class="table-responsive">  
          <table class="table table-condensed table-hover">        		<thead>
              <tr class="success">
                <th>Clave</th>
                <th>Nombre del Centro de Costo</th>
                <th>Dirección</th>
                <th class="text-center" style="color:black;">Opciones</th>
              </tr>
            </thead>
          	<tbody>
          		@foreach ($cost_centers as $cost_center)
            		<tr class="warning">
              		<td>{{ $cost_center->id }}</td>
        	        <td>{{ $cost_center->name}}<br>
        	        <td>{{ $cost_center->address}}</td>
        	        <th class="text-center" >
        	        	{{ link_to_route('cost_centers.edit', 'Editar ', $cost_center->id, ['class' => 'btn btn-primary']) }}
                    {{ link_to_route('cost_centers.show', 'Ver Detalles', $cost_center->id, ['class' => 'btn btn-warning']) }}  
                  {{--
                    {{ Form::open(array('method'=> 'DELETE', 'route' => array('cost_centers.destroy', $cost_center->id))) }}
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
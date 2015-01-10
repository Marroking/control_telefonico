@extends('protected.admin.master')

@section('title', 'Lista de Celulares')

@section('content')
    @if (Session::has('message'))
      <div class="flash alert-primary">
        <p style="padding:5px" class="bg-success text-success">{{ Session::get('message') }} </p>
      </div>
    @endif
      <h1 class="text-info text-center">
        Equipos Celulares
      </h1>
      <p>{{ link_to_route('cellphones.create', 'Generar Nuevo Almacén', null, ['class' => 'btn btn-danger']) }}
      @if ($cellphones->count())
        <div class="table-responsive">  
          <table class="table table-condensed table-hover">        		
            <thead>
              <tr class="success">
                <th>Clave</th>
                <th>N° Telefónico</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Compañia</th>
                <th>IMEI</th>
                <th>Nombre del plan</th>
                <th>Costo del Plan</th>
                <th class="text-center" style="color:black;">Opciones</th>
              </tr>
            </thead>
          	<tbody>
          		@foreach ($cellphones as $cellphone)
            		<tr class="warning">
              		<td>{{ $cellphone->id }}</td>
                  <td>{{ $cellphone->number }}</td>
        	        <td>{{ $cellphone->model }}<br>
        	        <td>{{ $cellphone->trade_mark }}</td>
        	        <td>{{ $cellphone->company }}</td>
        	        <td>{{ $cellphone->imei }}</td>
        	        <td>{{ $cellphone->plan_name }}</td>
        	        <td>{{ $cellphone->plan_cost }}</td>
        	        <th class="text-center" >
        	        	{{ link_to_route('cellphones.edit', 'Editar ', $cellphone->id, ['class' => 'btn btn-primary']) }}
                    {{ link_to_route('cellphones.show', 'Ver Detalles', $cellphone->id, ['class' => 'btn btn-warning']) }}  
                  {{--
                    {{ Form::open(array('method'=> 'DELETE', 'route' => array('cellphones.destroy', $cellphone->id))) }}
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
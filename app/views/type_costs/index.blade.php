@extends('protected.admin.master')

@section('title', 'Lista de Control de Gastos')

@section('content')
    @if (Session::has('message'))
      <div class="flash alert-primary">
        <p style="padding:5px" class="bg-success text-success">{{ Session::get('message') }} </p>
      </div>
    @endif
    <h1 class="text-info text-center">
      Control de Gastos
    </h1>

{{ $current_user }}

   <p>{{ link_to_route('type_costs.create', 'Generar Control de Gastos', null, ['class' => 'btn btn-danger']) }}
    @if ($type_costs->count())
      <div class="table-responsive">
      	<table id="allTypeCost" class="table table-condensed table-hover">
      		<thead>
            <tr class="success">
              <th>Clave</th>
              <th>Fecha del Gasto</th>
              <th>Concepto</th>
              <th>Usuario</th>
              <td>Centro de costo</td>
              <th class="text-center" style="color:black;">Opciones</th>
            </tr>
          </thead>
        	<tbody>
        		@foreach ($type_costs as $type_cost)
          		<tr class="warning">
            		<td>{{ $type_cost->id }}</td>
                <td>{{ $type_cost->date_cost}}</td>
                <td>{{ $type_cost->concept_cost}}</td>
                <td>{{ $type_cost->user()->first()->first_name }} {{ $type_cost->user()->first()->last_name }} </td>
      	        <td>{{ $type_cost->user()->first()->cost_center_id}}</td>
                <th class="text-center" >
      	        	{{ link_to_route('type_costs.edit', 'Editar', $type_cost->id, ['class' => 'btn btn-primary']) }}
                  {{ link_to_route('type_costs.show', 'Ver Detalles', $type_cost->id, ['class' => 'btn btn-warning']) }}  
                  {{--
                    {{ Form::open(array('method'=> 'DELETE', 'route' => array('type_costs.destroy', $type_cost->id))) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                  --}}
                </td>
      	     </tr>
      			@endforeach
        	</tbody>
      	</table>
        {{ $type_costs->links() }}
      </div>

      </script>

     
       {{ link_to('admin/', 'Atras', ['class' => 'btn btn-success btn-block']) }}
    @endif
@stop
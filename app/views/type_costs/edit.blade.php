@extends('protected.admin.master')

@section('title', 'Editar Tipo de Gasto')

@section('content')
	<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="text-center">Editar Tipo de Gasto</h3>
		 	</div>
	  		<div class="panel-body">
				{{ Form::model($type_cost, array('method' => 'PATCH', 'route' =>array('type_costs.update', $type_cost->id)))  }}
					<fieldset>
	         			@if (Session::has('flash_message'))
							<div class="form-group">
								<p>{{ Session::get('flash_message') }}</p>
							</div>
						@endif
						<div style="margin:10px;">
							<div class="col-md-12">
						    	<div class="form-group">
							    	{{ Form::label('date_cost', 'Fecha del Gasto:') }} 
								    <!-- {{ Form::custom('date', 'date_cost', null, ['id' => 'date_cost', 'class' => 'form-control']) }} -->
							   		{{ Form::text('date_cost', null, ['class' => 'form-control']) }}
							   		{{ errors_for('date_cost', $errors) }}
								 </div>
						  	</div>
						  	<div class="col-md-6">
								<div class="control-group">
                                  	<label>Concepto:</label>
                                    <div class="input-group">
                                      <span class="input-group-addon">$</span>
										{{ Form::text('concept_cost', null, ['class' => 'form-control']) }}
									</div>
									{{ errors_for('concept_cost', $errors) }}	
                                </div>
							</div>
							<div class="col-md-6 column">
								<div class="form-group">
									{{ Form::label('user_id', 'Nombre del Cliente:') }}
									{{ Form::select('user_id', $users , Input::old('user_id'), ['class' => 'form-control'])}}
									{{ errors_for('user_id', $errors) }}
								</div> 
							</div>
							<div class="form-group">
								{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
								{{ link_to('admin/type_costs', 'Atras', ['class' => 'btn btn-success btn-block']) }}
							</div>
						</div>
					</fieldset>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop
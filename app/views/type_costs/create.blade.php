	@extends('protected.admin.master')

	@section('title', 'Generar Control de Gasto')

	@section('content')
		<div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
			<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class=" text-default text-center">Generar Control de Gasto</h3>
		 		</div>
	  		<div class="panel-body">
					{{ Form::open(array('method'=>'post', 'url' => 'type_costs')) }}
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
								    	{{ Form::custom('date', 'date_cost', null, ['id' => 'date_cost', 'class' => 'form-control']) }}
								   		{{ errors_for('date_cost', $errors) }}
									 </div>
							  	</div>
							  	<div class="col-md-6">
									<div class="control-group">
	                                  		
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
								<br>
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

	<script>
		$(function() {
			$( "#date" ).datepicker();
				changeMonth: true;
				changeYear: true;
		});
	</script>
<div class="col-md-6 column">
	<div class="form-group" >
		{{ Form::text('model', null, ['placeholder' => 'Modelo:', 'class' => 'form-control'])}}
		{{ errors_for('model', $errors) }}
	</div>
</div>
<div class="col-md-6 column">
	<div class="form-group" >
		{{ Form::text('trade_mark', null, ['placeholder' => 'Marca:', 'class' => 'form-control'])}}
		{{ errors_for('trade_mark', $errors) }}
	</div>
</div>
<div class="col-md-6 column">
	<div class="form-group" >
		{{ Form::text('company', null, ['placeholder' => 'Compañia:', 'class' => 'form-control'])}}
		{{ errors_for('company', $errors) }}
	</div>
</div>
<div class="col-md-6 column">
	<div class="form-group" >
		{{ Form::text('imei', null, ['placeholder' => 'N° IMEI:', 'class' => 'form-control'])}}
		{{ errors_for('imei', $errors) }}
	</div>
</div>
<div class="col-md-6 column">
	<div class="form-group" >
		{{ Form::text('plan_name', null, ['placeholder' => 'Nombre del plan:', 'class' => 'form-control'])}}
		{{ errors_for('plan_name', $errors) }}
	</div>
</div>
<div class="col-md-12 column">
	<div class="form-group" >
		{{ Form::textarea('plan_description', null, ['size' => '0x5', 'placeholder' => 'Descripción del Plan:', 'class' => 'form-control']) }}
		{{ errors_for('plan_description', $errors) }}
	</div>
</div>
<div class="col-md-6 column">
	<div class="form-group" >
		{{ Form::text('plan_cost', null, ['placeholder' => 'Costo del plan:', 'class' => 'form-control'])}}
		{{ errors_for('plan_cost', $errors) }}
	</div>
</div>
<div class="col-md-6 column">
	<div class="form-group" >
		{{ Form::text('plan_iva_cost', null, ['placeholder' => 'Costo del plan con IVA:', 'class' => 'form-control'])}}
		{{ errors_for('plan_iva_cost', $errors) }}
	</div>
</div>
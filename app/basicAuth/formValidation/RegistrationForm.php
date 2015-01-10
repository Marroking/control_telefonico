<?php namespace basicAuth\formValidation;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

	protected $rules = [
		'employee_id' => 'required|numeric|unique:users',
		'email' => 'required|email|unique:users',
		'password' => 'required|confirmed',
		'first_name' => 'required',
		'last_name' => 'required',
		'radio' => 'required|numeric|unique:users',
		'cost_center_id' => 'required',
		'department_id' => 'required',
		'cellphone_id' => 'required||unique:users',
		// 'model' => 'required',
		// 'trade_mark' => 'required',
		// 'company' => 'required',
		// 'imei' => 'required|numeric',
		// 'plan_name' => 'required',
		// 'plan_description' => 'required',
		// 'plan_name' => 'required',
		// 'plan_description' => 'required',
		// 'plan_cost' => 'required',
		// 'plan_iva_cost' => 'required',
		
		

	];
}



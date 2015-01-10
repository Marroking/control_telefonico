<?php

class Cellphone extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = array('number', 'model', 'trade_mark', 'company', 'imei', 'plan_name', 'plan_description', 'plan_cost', 'plan_iva_cost', 'user_id');

	public function user()
	{
		return $this->belongsTo('User');
	}


}
<?php

class CostCenter extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name'=>'required',
	  'address'=>'required'
	];

	// Don't forget to fill this array
	protected $fillable = array('name', 'address');

	public function users()
	{
		return $this->hasMany('User');
	}

	// public function user()
	//   {
	//   	return $this->hasMany('User', 'id');
	//   }
}
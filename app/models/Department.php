<?php

class Department extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = array('name_department', 'cost_center', 'cost_center_description');

	public function users()
	{
		return $this->hasMany('User');
	}

}
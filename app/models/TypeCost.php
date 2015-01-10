<?php

class TypeCost extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $table = 'type_costs';

	// Don't forget to fill this array
	//protected $fillable = array('date_cost', 'concept_cost', 'user_id', 'trade_mark_cel', 'status', 'department_id', 'ceco', 'des_ceco' );
	protected $fillable = array('date_cost', 'concept_cost', 'user_id');

	public function user()
	{
		return $this->belongsTo('User');
	}

	// public function scopeTypeCostCurrentUser($query, $type_costs)
	// {
	// 	$return $query->where('cost_center_id', '=', $type_costs->cost_center_id);
	// 		->orderBy('created_at', 'desc');
	// }

}
<?php

class HomeController extends BaseController {

	public $restful = true;

	public function index()
	{
		
	}

	public function getDatatable()
	{
	    return Datatable::collection(
	    TypeCost::all(
	        array('id', 'date_cost','concept_cost', 'user_id',DB::raw('substr(cuerpo, 1, 100) as cuerpo'),'concept_cost','user_id')
	        )
	    )
	    ->showColumns('id', 'date_cost','concept_cost','user_id')
	    ->searchColumns('date_cost','concept_cost','user_id')
	    ->orderColumns('id', 'date_cost','concept_cost','user_id')
	    ->make();
	}
}

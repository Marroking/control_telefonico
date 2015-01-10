<?php

class CostCentersController extends \BaseController {

	/**
	 * Display a listing of cost_centers
	 *
	 * @return Response
	 */
	public function index()
	{
		$cost_centers = CostCenter::all();

		return View::make('cost_centers.index', compact('cost_centers'));
	}

	/**
	 * Show the form for creating a new costCenter
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cost_centers.create');
	}

	/**
	 * Store a newly created costcenter in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
	        'name'=>'required',
	        'address'=>'required'
    	);
		$input = Input::all();
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		  {
		  	CostCenter::create($input);
	      return Redirect::route('cost_centers.index')
	          ->withInput()
	          ->withErrors($validation)
	          ->with('message', 'Centro de Costos Registrado Exitosamente');
		  }
		   //show error message
		return Redirect::route('cost_centers.create')
		   ->withInput()
		   ->withErrors($validation)
		   ->with('message', 'Falta completar unos campos.');
	}

	/**
	 * Display the specified costcenter.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cost_center = CostCenter::findOrFail($id);

		return View::make('cost_centers.show', compact('cost_center'));
	}

	/**
	 * Show the form for editing the specified costcenter.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cost_center = CostCenter::find($id);

		return View::make('cost_centers.edit', compact('cost_center'));
	}

	/**
	 * Update the specified costcenter in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//create a rule validation
	    $rules=array(
	          'name'=>'required',
	          'address'=>'required'
	    );
	    //get all Sector information
    	$input = Input::all();
	    //get all cost_centers information
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		  {
	      $cost_center = CostCenter::find($id);
	      $cost_center->update($input);
	      return Redirect::route('cost_centers.index')
	          ->withInput()
	          ->withErrors($validation)
	          ->with('message', 'Centro de Costos Actualizado');
		  }
	  	return Redirect::route('cost_centers.edit', $id)
	      ->withInput()
	      ->withErrors($validation)
	      ->with('message', 'Hubo errores en la validación.');
	}

	/**
	 * Remove the specified cost_centers from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		CostCenter::destroy($id);

		return Redirect::route('cost_centers.index');
	}

}

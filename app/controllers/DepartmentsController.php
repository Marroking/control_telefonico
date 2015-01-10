<?php

class DepartmentsController extends \BaseController {

	/**
	 * Display a listing of deparments
	 *
	 * @return Response
	 */
	public function index()
	{
		$departments = Department::all();

		return View::make('departments.index', compact('departments'));
	}

	/**
	 * Show the form for creating a new deparment
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('departments.create');
	}

	/**
	 * Store a newly created deparment in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
	        'name_department'=>'required',
	        'cost_center'=>'required',
	        'cost_center_description'=>'required',
    	);
		$input = Input::all();
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		  {
		  	Department::create($input);
	      return Redirect::route('departments.index')
	          ->withInput()
	          ->withErrors($validation)
	          ->with('message', 'Departamento Registrado Exitosamente');
		  }
		   //show error message
		return Redirect::route('departments.create')
		   ->withInput()
		   ->withErrors($validation)
		   ->with('message', 'Falta completar unos campos.');
	}

	/**
	 * Display the specified departments.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$department = Department::findOrFail($id);

		return View::make('departments.show', compact('department'));
	}

	/**
	 * Show the form for editing the specified departments.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$department = Department::find($id);

		return View::make('departments.edit', compact('department'));
	}

	/**
	 * Update the specified deparment in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//create a rule validation
	    $rules=array(
	        'name_department'=>'required',
	        'cost_center'=>'required',
	        'cost_center_description'=>'required',
	    );
	    //get all Sector information
    	$input = Input::all();
	    //get all departments information
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		  {
	      $department = Department::find($id);
	      $department->update($input);
	      return Redirect::route('departments.index')
	          ->withInput()
	          ->withErrors($validation)
	          ->with('message', 'Departamento Actualizado');
		  }
	  	return Redirect::route('departments.edit', $id)
	      ->withInput()
	      ->withErrors($validation)
	      ->with('message', 'Hubo errores en la validación.');
	}

	/**
	 * Remove the specified deparment from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Department::destroy($id);

		return Redirect::route('departments.index');
	}

}

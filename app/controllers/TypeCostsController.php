<?php

class TypeCostsController extends \BaseController {

	/**
	 * Display a listing of type_costs
	 *
	 * @return Response
	 */

	public function index()
	{	
		//$type_costs = TypeCost::paginate();

		//$id = Sentry::getUser()->cost_center_id;
		//$type_costs = CostCenter::find($id)->user;

		//$id = Sentry::getUser()->cost_center_id;
			//$type_costs = TypeCost::scopeTypeCostCurrentUser($type_costs)->get();
		//return View::make('type_costs.index')->with('type_costs', $type_costs);

		// $type_costs = TypeCost::paginate();

		// $cost_centers = Sentry::getUser()->id->cost_center;
	 //  //$cost_users = $cost_centers->users;
	 //  return View::make ('type_costs.index', compact ('cost_users'));

		$type_costs = TypeCost::paginate();
		//$id = Sentry::getUser()->cost_center;
    $current_user = Sentry::getUser()->cost_center_id;
    
    $user = DB::table('users')->where('cost_center_id', $current_user)->first();

    return View::make('type_costs.index')
    	->with('type_costs', $type_costs)
    		->with('current_user', $current_user);
	}

	/**
	 * Show the form for creating a new typecost
	 *
	 * @return Response
	 */
	public function create()
	{
		// $user_ = ['users' => User::lists('first_name', 'id')];
		// return View::make('type_costs.create', $user_, compact('user_'));

		//$users = DB::table('users')->orderBy('first_name', 'asc')->lists('first_name', 'id');
		$users = User::select(DB::raw('concat (first_name," ",last_name) as full_name, id'))->lists('full_name', 'id');
		return View::make('type_costs.create')->with('users',$users);

	}

	/**
	 * Store a newly created typecost in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//create a rule validation
	    $rules=array(
	          'date_cost' => 'date|required',
	          'concept_cost' =>  'required|numeric',
	          'user_id'=>'required',

	          // 'trade_mark_cel'=>'required|numeric',
	          // 'status'=>'required',
	          // 'trade_mark_cel'=>'required|numeric',
	          // 'department_id'=>'required|numeric',
	          // 'ceco'=>'required',
	          // 'des_ceco'=>'required',
	    );
	    //get all family information
	    $input = Input::all();
	    //validate family information with the rules
	      $validation=Validator::make($input,$rules);
	      if($validation->passes())
	      {
	      //save new family information in the database 
	      //and redirect to index page
	          TypeCost::create($input);
	          return Redirect::route('type_costs.index')
	             ->withInput()
	             ->withErrors($validation)
	             ->with('message', 'Tipo de Costo Actualizado.');
	      }
	      //show error message
	      return Redirect::route('type_costs.create')
	           ->withInput()
	           ->withErrors($validation)
	           ->with('message', 'Falta completar unos campos.');
	}

	/**
	 * Display the specified typecost.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$type_cost = TypeCost::findOrFail($id);

		return View::make('type_costs.show', compact('type_cost'));
	}


	/**
	 * Show the form for editing the specified typecost.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$type_cost = TypeCost::find($id);

		//return View::make('type_costs.edit', compact('type_cost'));

		$users = User::select(DB::raw('concat (first_name," ",last_name) as full_name, id'))->lists('full_name', 'id');
		return View::make('type_costs.edit', compact('type_cost'))->with('users',$users);
	}

	/**
	 * Update the specified typecost in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//create a rule validation
	    $rules=array(
          'date_cost'=>'required',
          'concept_cost'=>'required',
          'user_id'=>'required',
	    );
	    //get all Sector information
    	$input = Input::all();
	    //get all type_costs information
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		  {
	      $type_cost = TypeCost::find($id);
	      $type_cost->update($input);
	      return Redirect::route('type_costs.index')
	          ->withInput()
	          ->withErrors($validation)
	          ->with('message', 'El Control de gastos se ha Actualizado correctamente');
		  }
	  	return Redirect::route('type_costs.edit', $id)
	      ->withInput()
	      ->withErrors($validation)
	      ->with('message', 'Hubo errores en la validación.');
	}

	/**
	 * Remove the specified typecost from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		TypeCost::destroy($id);

		return Redirect::route('type_costs.index');
	}

}

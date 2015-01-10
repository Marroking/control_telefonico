<?php

use basicAuth\Repo\UserRepositoryInterface;
use basicAuth\formValidation\RegistrationForm;

class RegistrationController extends \BaseController {

	/**
	 * @var $user
	 */
	protected $user;

	/**
	 * @var RegistrationForm
	 */
	private $registrationForm;

	function __construct(UserRepositoryInterface $user, RegistrationForm $registrationForm)
	{
		$this->user = $user;
		$this->registrationForm = $registrationForm;
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{


		$departments = DB::table('departments')->orderBy('name_department', 'asc')->lists('name_department', 'id');
		$cost_centers = DB::table('cost_centers')->orderBy('name', 'asc')->lists('name', 'id');
		$cellphones = DB::table('cellphones')->orderBy('number', 'asc')->lists('number', 'id');
		//return View::make('registration.create')->nest('cellphones', 'cellphones.create')->with('departments',$departments)->with('cost_centers',$cost_centers);
		return View::make('registration.create')->with('departments',$departments)->with('cost_centers',$cost_centers)->with('cellphones',$cellphones);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//$input = Input::only('email', 'password', 'password_confirmation', 'first_name', 'last_name', 'employee_id', 'radio', 'department_id', 'cost_center_id', 'model', 'trade_mark', 'company', 'imei', 'plan_name', 'plan_description', 'plan_cost', 'plan_iva_cost');
		$input = Input::only('email', 'password', 'password_confirmation', 'first_name', 'last_name', 'employee_id', 'radio', 'department_id', 'cost_center_id', 'cellphone_id');

		$this->registrationForm->validate($input);

		//$input = Input::only('email', 'password', 'first_name', 'last_name', 'employee_id', 'radio', 'department_id', 'cost_center_id', 'model', 'trade_mark', 'company', 'imei', 'plan_name', 'plan_description', 'plan_cost', 'plan_iva_cost');
		$input = Input::only('email', 'password', 'first_name', 'last_name', 'employee_id', 'radio', 'department_id', 'cost_center_id', 'cellphone_id');

		$input = array_add($input, 'activated', true);

		$user = $this->user->create($input);

		// Find the group using the group name
    	$usersGroup = Sentry::findGroupByName('Usuario');

    	// Assign the group to the user
    	$user->addGroup($usersGroup);

		return Redirect::to('login')->withFlashMessage('¡Usuario creado exitosamente!');
	}



}
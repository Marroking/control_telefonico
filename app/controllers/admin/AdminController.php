<?php

class AdminController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getHome()
	{
		return View::make('protected.admin.admin_dashboard');
	}	

	public function index()
	{
		return View::make('protected.admin.files.index');
	}


}
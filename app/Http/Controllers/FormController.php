<?php namespace App\Http\Controllers;

class FormController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Form Controller
	|--------------------------------------------------------------------------
	|
	| Handles displaying and submitting the form View.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('student');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('form');
	}
	public function submit()
	{
		return view('form')->withErrors('Submission Successful');
	}
}

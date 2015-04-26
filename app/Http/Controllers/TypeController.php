<?php namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Application;
use Illuminate\Support\Facades\Request;

class TypeController extends Controller {

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
		return view('formselect');
	}
	public function select()
	{
		return view('form')->with(array('application_type' => Request::input('application_type')));
	}
}

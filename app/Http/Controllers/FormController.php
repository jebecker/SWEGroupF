<?php namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Application;
use Illuminate\Support\Facades\Request;

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
	public function submit(ApplicationRequest $request)
	{
		$courses = '"' . $request->get('courses_teaching','null') . '"';
		$desired = '"' . $request->get('courses_and_grades') . '"';

		Application::create([

			'name' => $request->get('name'),
			'applicant_id' => auth()->user()->sso_id,
			'application_type' => $request->get('application_type'),
			'student_id' => $request->get('student_id'),
			'gpa' => floatval($request->get('gpa')),
			'pla_info' => $request->get('pla_info', null), // ASK TYLER WHY THIS FIELD IS NECESSARY
			'degree_track' => $request->get('degree_track', null),
			'advisor_name' => $request->get('advisor_name'),
			'phone_number' => $request->get('phone_number'),
			'email' => $request->get('email'),
			'graduation_date' => $request->get('graduation_date'),
			'courses_teaching' => $courses,
			'courses_taught' => $request->get('courses_taught', null),
			'courses_and_grades' => $desired,
			'other_employment' => $request->get('other_employment', null),
			'speak_score' => floatval($request->get('speak_score', null)),
			'sem_last_speak' => $request->get('sem_last_speak', null),
			'gato_status' => $request->get('gato_status'),
			'onita_status' => $request->get('onita_status', null),
			'submitted' => true
		]);
		return view('form@index')->withErrors('Submission Successful');
	}
}

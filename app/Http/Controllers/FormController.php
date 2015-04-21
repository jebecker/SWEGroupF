<?php namespace App\Http\Controllers;

use App\Http\Requests\RequestForm;
use App\Application;

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
		$this->middleware('auth');
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
	public function submit(RequestForm $request)
	{
<<<<<<< Updated upstream
		$dateTime = new \DateTime('now');
		$date = $dateTime->format('d/m/Y');
=======
>>>>>>> Stashed changes
		$courses = '"' . $request->get('applicantTeaching','null') . '"';
		$desired = '"' . $request->get('applicantDesired') . '"';

		Application::create([

			'name' => $request->get('applicantName'),
			'applicant_id' => auth()->user()->sso_id,
			'application_type' => $request->get('schoolStandingOption'),
			'student_id' => $request->get('applicantID'),
			'gpa' => floatval($request->get('applicantGPA')),
			'pla_info' => $request->get('undergradApplicantStanding','null'), // ASK TYLER WHY THIS FIELD IS NECESSARY
<<<<<<< Updated upstream
			'degree_track' => $request->get('gradStudentProgram','null'),
=======
			'degree_track' => $request->get('gradStudentProgram',null),
>>>>>>> Stashed changes
			'advisor_name' => $request->get('advisor'),
			'phone_number' => $request->get('phone'),
			'email' => $request->get('email'),
			'graduation_date' => $request->get('graduationDate'),
			'courses_teaching' => $courses,
			'courses_taught' => $courses,
			'courses_and_grades' => $desired,
<<<<<<< Updated upstream
			'other_employment' => 'null',
			'speak_score' => floatval($request->get('speakOPT','null')),
			'sem_last_speak' => $request->get('lastSpeak','null'),
			'gato_status' => $request->get('gatoRequirement'),
			'onita_status' => $request->get('onitaRequirement','null'),
			'submitted' => true,
			'created_at' => "$date",
			'updated_at' => "$date"
=======
			'other_employment' => $request->get('otherWork','null'),
			'speak_score' => floatval($request->get('speakOPT','null')),
			'sem_last_speak' => $request->get('lastSpeak','null'),
			'gato_status' => $request->get('gatoRequirement'),
			'onita_status' => $request->get('onitaRequirement',null),
			'submitted' => true
>>>>>>> Stashed changes
		]);
		return view('form')->withErrors(var_dump(auth()->user()));
	}
}

<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApplicationRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        // Additional messages may be required/existing messages may need tweaked, more testing needs to be done.
        return [
            'name.required' => 'Your full name is required',
            'student_id.required' => 'Your Student ID is required',
            'gpa.required' => 'Your GPA is required',
            'pla_info.required_if' => 'Academic Standing required for undergrad students',
            'degree_track.required_if' => 'Degree required for graduate students',
            'advisor_name.required' => 'You must enter your department advisor_name\'s name',
            'phone_number.required' => 'Your phone_number number is required',
            'email.required' => 'Your student email is required',
            'graduation_date.required' => 'You must enter a valid graduation date',
            'courses_and_grades' => 'You must enter the courses you wish to teach',
            'speak_score.required_if' => 'International students are required to provide a SPEAK OPT score',
            'sem_last_speak.required_if' => 'The semester of your last SPEAK test is required',
            'gato_status.required' => 'You must select a GATO status',
            'speak_status.required_if' => 'International students must indicate their SPEAK test status',
            'onita_status.required_without' => 'You must indicate an ONITA status',
            'hasBoth.size' => 'You must enter either a SPEAK date or acknowledge that you\'ve met the requirement',
            'hasNeigher.size' => 'You must enter a SPEAK date or acknowledge that you\'ve met the requirement'
        ];

    }

    public function rules()
    {
        Request::merge(array(
        'hasBoth'    => Request::has('speak_status') && Request::has('speak_date') && (Request::input('application_type') == 'ITA'),
        'hasNeither' => !Request::has('speak_status') && !Request::has('speak_date') && (Request::input('application_type') == 'ITA')

        ));
        $date = date("m-d-Y");
        return [
            'application_type' => 'required',
            'name' => 'required|max:255',
            'student_id' => 'required|numeric',
            'gpa' => 'required|min:0|max:4',
            'pla_info' => 'required_if:application_type,PLA|max:10',
            'degree_track' => 'required_if:application_type,TA,ITA|max:255',
            'advisor_name' => 'required_if:application_type,TA,ITA|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|email|max:255',
            'graduation_date' => "required|date|after:$date",
            'courses_teaching' => 'max:255',
            'courses_taught' => 'max:255',
            'courses_and_grades' => 'max:255',
            'speak_score' => 'required_if:application_type,ITA|required_with:speak_status|numeric|max:255',
            'sem_last_speak' => 'required_if:application_type,ITA|alpha_num|min:4|required_with:speak_status|max:255',
            'other_employment' =>  'max:255',
            'gato_status' => 'required',
            'hasBoth' => 'size:0',
            'hasNeither' => 'size:0',
            'onita_status' => 'required_if:application_type,ITA'
           ];
    }

}
?>
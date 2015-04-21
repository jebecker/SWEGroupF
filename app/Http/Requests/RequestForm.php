<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestForm extends Request {

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        // Additional messages may be required/existing messages may need tweaked, more testing needs to be done.
        return [
            'schoolStandingOption' => 'You must indicate your standing',
            'applicantName.required' => 'Your full name is required',
            'applicantID.required' => 'Your Student ID is required',
            'applicantGPA.required' => 'Your GPA is required',
            'undergradApplicantStanding.required_if' => 'Academic Standing required for undergrad students',
            'gradStudentProgram.required_if' => 'Degree required for graduate students',
            'advisor.required' => 'You must enter your department advisor\'s name',
            'phone.required' => 'Your phone number is required',
            'email.required' => 'Your student email is required',
            'graduationDate.required' => 'You must enter a valid graduation date',
            'applicantDesired' => 'You must enter the courses you wish to teach',
            'speakOPT.required_if' => 'International students are required to provide a SPEAK OPT score',
            'lastSpeak.required_if' => 'The semester of your last SPEAK test is required',
            'gatoRequirement.required' => 'You must select a GATO status',
            'speakRequirement.required_if' => 'International students must indicate their SPEAK test status',
            'onitaRequirement.required_without' => 'You must indicate an ONITA status',
            'onitaDate.required_without' => 'You must indicate an ONITA status'
        ];

    }

    public function rules()
    {
        $date = date("m-d-Y");
        return [
            'schoolStandingOption' => 'required',
            'applicantName' => 'required|max:20',
            'applicantID' => 'required|numeric',
            'applicantGPA' => 'required|min:0|max:4',
            'undergradApplicantStanding' => 'required_if:schoolStandingOption,PLA|max:10',
            'gradStudentProgram' => 'required_if:schoolStandingOption,TA',
            'advisor' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'graduationDate' => "required|date|after:$date",
            'applicantTeaching' => 'max:255',
            'applicantDesired' => 'required|max:255',
            'speakOPT' => 'required_if:speakRequirement,Met|numeric',
            'lastSpeak' => 'required_if:schoolStandingOption,ITA|alpha_num',
            'otherWork' =>  'max:255',
            'gatoRequirement' => 'required',
            'speakRequirement' => 'required_if:schoolStandingOption,ITA',
            'onitaRequirement' => 'required_if:schoolStandingOption,ITA',
            'onitaDate' => 'date|required_if:schoolStandingOption,ITA' /// MAY REQUIRE ADDITIONAL RULES

        ];
    }

}
?>
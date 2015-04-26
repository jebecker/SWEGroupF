@extends('app')

@section('content')
<!-- Application Section -->
<div>
    <br>
    <br>
    <br>
</div>
<?php use Illuminate\Support\Facades\Redirect;

$app = App\Application::where('applicant_id',auth()->user()->sso_id)->orderBy('app_id','desc')->first();
if(!$app)
{
    $app = App\Application::create(array('name' => auth()->user()->name,'email' => auth()->user()->email,'applicant_id' => auth()->user()->sso_id,'submitted' => 'false'));
}
if(!isset($application_type))
    $application_type = \App\Application::where('applicant_id','=',auth()->user()->sso_id)->orderBy('app_id','desc')->first()->application_type;

if($application_type == NULL)
    Redirect::to('google.com');
    ?>

    <div class="container">
        <!--mutli level columns-->
        <div class="col-md-8 col-md-offset-2 text-center">
            <h2>COMPUTER SCIENCE DEPARTMENT</h2>

            <div class="col-md-8 col-md-offset-2 text-center">
                <h4> GRADUATE TEACHING ASSISTANT APPLICATION</h4>

                <div class="col-md-8 col-md-offset-2 text-center">
                    <u>Deadline:</u> <label  style="line-height:30px;"  name="deadlineDateLabel">Put Date Here </label>
                </div>
            </div>
        </div>
    </div>
    <div>
        <br>
    </div>
    <div class="container" style="max-width:1000px;margin 0 auto;">
        {!!  Form::model($app,array('action'=>'FormController@submit', 'method' => 'post', 'class' => 'form-inline')) !!}
            {!! Form::hidden('application_type',"$application_type",array('name' => 'application_type', 'value' => "$application_type")) !!}
            <div class="container text-center" style="width:inherit"> <!--text inputs for name, ID, GPA -->
                <div class="form-group pull-left">
                    {!! Form::label('name', 'Name', array('style' => 'line-height:30px')) !!}
                    {!! Form::text('name',auth()->user()->name,array('class' => 'form-control','placeholder' => 'Enter your name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('student_id', 'Student ID', array('style' => 'line-height:30px')) !!}
                    {!! Form::text('student_id',$app->student_id,array('class' => 'form-control','placeholder' => 'Enter your student ID')) !!}
                </div>

                <div class="form-group pull-right">
                    {!! Form::label('gpa', 'GPA', array('style' => 'line-height:30px')) !!}
                    {!! Form::number('gpa',$app->gpa,array('class' => 'form-control','placeholder' => '#.##','step' => 'any')) !!}
                </div>
            </div>
            <div>
                <br>
            </div>
            @if($application_type == 'PLA')
            <div class="container" style="width:inherit">
                {!! Form::label('pla_info','Indicate program and level: ', array('class' => 'pull-left')) !!}
                {!! Form::text('pla_info',$app->pla_info,array('class' => 'form-control pull-right','placeholder' => 'CS BS sr')) !!}
            </div>
            <div>
                <br>
            </div>
            @endif

            @if($application_type == 'TA' || $application_type == 'ITA')
            <div class="container" id="gradStudentDiv" style="width:inherit">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group pull-left">
                    <div class="radio">
                        {!! Form::label('degree_track','Indicate degree:') !!}
                        {!! Form::label('degree_track','MS',array('style' => 'line-height:30px;padding-left:20px')) !!}
                        {!! Form::radio('degree_track','MS',$app->degree_track == 'MS') !!}
                        {!! Form::label('degree_track','PHD',array('style' => 'line-height:30px;padding-left:10px')) !!}
                        {!! Form::radio('degree_track','PHD',$app->degree_track == 'PHD') !!}
                    </div>
                </div>

                <div class="form-group pull-right">
                    {!! Form::label('advisor_name','Advisor Name',array('style' => 'line-height:30px')) !!}
                    {!! Form::text('advisor_name',$app->advisor_name,array('class' => 'form-control','placeholder' => 'Enter your Advisor\'s name')) !!}
                </div>
            </div>
            <div>
                <br>
            </div>
            @endif

            <div class="container" style="width:inherit">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group pull-left">
                    {!! Form::label('phone_number','Phone: ') !!}
                    {!! Form::text('phone_number',$app->phone_number,array('class' => 'form-control')) !!}
                </div>
                <div class="form-group pull-right">
                    {!! Form::label('email','Mizzou Email: ') !!}
                    {!! Form::email('email',auth()->user()->email,array('class' => 'form-control', 'style' => 'width:400px', 'placeholder' => 'pawprint@mail.missouri.edu')) !!}
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit">
                <div class="form-group" style="width:100%">
                    {!! Form::label('graduation_date','Graduation Date: ',array('class' => 'pull-left')) !!}
                    {!! Form::date('graduation_date',$app->graduation_date,array('class' => 'form-control pull-right','placeholder' => 'mm/dd/yyyy')) !!}
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
               <div class="form-group" style="width: 100%;">
                   {!! Form::label('courses_taught','Course(s) you have previously taught:',array('class' => 'pull-left')) !!}
                   {!! Form::text('courses_taught',$app->courses_taught,array('class' => 'form-control pull-right','placeholder' => 'e.g. CS1050, CS2050', 'style' => 'width: 60%')) !!}
               </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit;">
                <div class="form-group" style="width:100%;">
                    {!! Form::label('courses_teaching','Course(s) you are currently teaching:',array('class' => 'pull-left')) !!}
                    {!! Form::text('courses_teaching',$app->courses_teaching,array('class' => 'form-control pull-right','placeholder' => 'e.g. CS1050, CS2050', 'style' => 'width: 60%')) !!}
                </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group" style="width:100%;">
                    {!! Form::label('courses_and_grades','Course(s) You Would Like to Teach (must have taken previously), include grades received:',array('class' => 'pull-left')) !!}
                    <br>
                    {!! Form::text('courses_and_grades',$app->courses_and_grades,array('class' => 'form-control','placeholder' => 'e.g. CS1050 A, CS2050 B-', 'style' => 'width: 100%')) !!}
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <div class="form-group" style="width:100%;">
                    {!! Form::label('other_employment','Other places you work:',array('class' => 'pull-left', 'style' => 'line-height:30px')) !!}
                    {!! Form::text('other_employment',$app->other_employment,array('class' => 'form-control pull-right','style' => 'width: 60%')) !!}
                </div>
            </div>
            <div>
                <br>
            </div>
            @if($application_type == 'ITA')
            <div class="container" style="width:inherit;">
                <div class="pull-left form-group" style="width:40%;">
                    {!! Form::label('speak_score','SPEAK/OPT score, if applicable:',array('class' => 'pull-left', 'style' => 'line-height:30px')) !!}
                    {!! Form::text('speak_score',$app->speak_score,array('class' => 'form-control pull-right','style' => 'width: 40%')) !!}
                </div>
                <div class="pull-right form-group" style="width:40%;">
                    {!! Form::label('sem_last_speak','Semester of last test:',array('class' => 'pull-left', 'style' => 'line-height:30px')) !!}
                    {!! Form::text('sem_last_speak',$app->sem_last_speak,array('class' => 'form-control pull-right','style' => 'width: 40%')) !!}
            </div>
            <div>
                <br>
                <br>
            </div>
            @endif

            <div class="container" style="width:inherit;">
                <div class="pull-left">
                    <b style="text-decoration:underline">Per CS Dept. policy:</b>
                    <br>
                    <li style="margin-left:50px">TA's must not exceed half-time total employment within the University system including, but not limited to, the CS department.</li>
                    <li style="margin-left:50px">New TAs, ITAs, and PLAs who have received an appointment, are required to participate in the GATO (Graduate Assistant Teaching Orientation), which is offered just prior to the start of fall and winter terms. (You do not need to attend more than once.)
                        <div class="radio">
                            {!! Form::label('gato_status_met','Requirement Met:', array('style' => 'line-height:30px')) !!}
                            {!! Form::radio('gato_status',1,$app->gato_status == true, array('id' => 'gato_status_met')) !!}
                            {!! Form::label('gato_status_unmet','Will Attend in Aug/Jan (If selected):', array('style' => 'line-height:30px;padding-left:20px')) !!}
                            {!! Form::radio('gato_status',0, $app->gato_status == false && $app->gato_status != NULL, array('id' => 'gato_status_unmet')) !!}
                        </div>
                    </li>
                </div>
            </div>
            <div>
                <br>
            </div>
            @if($application_type == 'ITA')
            <div class="container" style="width:inherit;">
                <div class="pull-left">
                    <b style="text-decoration:underline">INTERNATIONAL STUDENTS, PLEASE BE AWARE OF THE FOLLOWING:</b>
                    <br>
                    <li style="margin-left:50px">A potential ITA is required to have satisfactorily completed at least one semester as a student at the University of Missouri before being considered for a TA position.</li>
                    <li style="margin-left:50px">Prior to becoming a TA, any ITA (International Teaching Assistant) who received their primary and secondary education in a country where English is not the principal language <b style="text-decoration:underline">are required by law to be assessed for English proficiency (SPEAK test). If you do not register for and satisfy applicable language assessment requirements, you will not be eligible to accept a TA appointment.</b> Arrangements for language assessments must be made before the end of the semester prior to accepting a TA position.
                        <br>
                        <div class="radio" style="vertical-align: middle;">
                            {!! Form::label('speak_status_met','Requirement Met:', array('style' => 'line-height:30px')) !!}
                            {!! Form::radio('speak_status',1,$app->speak_status == true, array('id' => 'speak_status_met')) !!}
                            {!! Form::label('speak_status_unmet','Requirement not met, registered for speak (date):', array('style' => 'line-height:30px;padding-left:20px')) !!}
                            {!! Form::date('speak_date',$app->speak_date, array('class' => 'form-control','id' => 'speak_status_unmet')) !!}
                        </div>
                    </li>
                    <li style="margin-left:50px">ONITA, is a <b style="text-decoration: underline">requirement for all international TAs and PLAs</b> who have not previously attended this orientation. You cannot have a TA/PLA appointment until this requirement has been met.
                        <br>
                        <div class="radio">
                            {!! Form::label('onita_status_met','Requirement Met:', array('style' => 'line-height:30px')) !!}
                            {!! Form::radio('onita_status',1,$app->onita_status == true, array('id' => 'onita_status_met')) !!}
                            {!! Form::label('onita_status_unmet','Will Attend in Aug/Jan (If selected):', array('style' => 'line-height:30px;padding-left:20px')) !!}
                            {!! Form::radio('onita_status',0, $app->onita_status == false && $app->onita_status != NULL, array('class' => 'form-control','id' => 'onita_status_unmet')) !!}
                        </div>
                    </li>
                </div>
            </div>

            <br>
            <br>
            @endif
            <div class="container text-center" style="width:inherit;">
                <button type="submit" class="btn btn-xl">Submit</button>
            </div>
            <br>
            <br>
    </div>
        {!!  Form::close()  !!}
@endsection
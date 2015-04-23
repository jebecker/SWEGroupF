@extends('app')
@section('content')
<!-- Application Section -->
<div>
    <br>
    <br>
    <br>
</div>
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
        {!!  Form::open(array('action'=>'FormController@submit', 'method' => 'post', 'class' => 'form-inline')) !!}
            <div class="container text-center" style="min-width: 50%;max-width: 100%">
                <div class="radio pull-left">
                    <label style="line-height:30px;" >
                        TA (Graduate Student)
                        <input type="radio" name="schoolStandingOption" name="graduateStudent" value="TA">
                    </label>
                </div>
                <div class="radio"">
                    <label style="line-height:30px;" >
                        PLA (Undergradute Student)
                        <input type="radio" name="schoolStandingOption" name="undergraduteStudent" value="PLA">
                    </label>
                </div>
                <div class="radio pull-right">
                    <label style="line-height:30px;" >
                        ITA (International Student)
                        <input type="radio" name="schoolStandingOption" name="internationalStudent" value="ITA">
                    </label>
                </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container text-center" style="width:inherit"> <!--text inputs for name, ID, GPA -->
                <div class="form-group pull-left">
                    <label  style="line-height:30px;" for="applicantName">Name </label>
                    <input type="text" class="form-control" name="applicantName" placeholder="Put Name Here">
                </div>

                <div class="form-group">
                    <label  style="line-height:30px;" for="applicantID">ID </label>
                    <input type="text" class="form-control" name="applicantID" placeholder="Student ID">
                </div>

                <div class="form-group pull-right">
                    <label style="line-height:30px;"  for="applicantGPA">GPA </label>
                    <input type="text" class="form-control" name="applicantGPA" placeholder="#.##">
                </div>
            </div>
            <div>
                <br>
            </div>

            <div class="container" style="width:inherit">
                <!--text input for undergrad student applicant to put in program and level -->

                <label  style="line-height:30px;" class="pull-left" for="undergradApplicantStanding"><u>If Undergraduate</u> applying for PLA,
                    indicate
                    program and level </label>
                <input type="text" class="form-control pull-right" name="undergradApplicantStanding"
                       placeholder="CS BS sr">
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group pull-left">
                    <div class="radio">
                        If graduate, indicate degree:
                        <label style="line-height:30px;padding-left:20px" >
                            MS
                            <input type="radio" name="gradStudentProgram" name="gradStudentProgram" value="Masters">
                        </label>
                        <label style="line-height:30px;padding-left:10px" >
                            Phd
                            <input class="col-md-offset-2" type="radio" name="gradStudentProgram"
                                   name="graduateProgramPHD"
                                   value="PHD">
                            Phd
                        </label>
                    </div>
                </div>

                <div class="form-group pull-right">
                    <label style="line-height:30px;"  for="advisor">Advisor: </label>
                    <input type="text" class="form-control" name="advisor" placeholder="Advisor Name Here">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group pull-left">
                    <label style="line-height:30px;"  for="phone">Phone: </label>
                    <input type="tel" class="form-control" name="phone">
                </div>
                <div class="form-group pull-right">
                    <label for="email">Mizzou Email: </label>
                    <input type="email" class="form-control" style="width:400px;" name="email"
                           placeholder="pawprint@mail.missouri.edu">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group" style="width:100%">
                    <label class="pull-left" for="graduationDate">Anticipated Graduation Date: </label>
                    <input type="date" class="pull-right form-control" name="graduationDate"
                           placeholder="mm/dd/yyyy">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
               <div class="form-group" style="width: 100%;">
                   <label class="pull-left" for="applicantHaveTaught">Course(s) you have previously taught: </label>
                   <input type="text" class="pull-right form-control" style="width: 60%;" name="applicantHaveTaught" placeholder="e.g. CS1050">
               </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit;">
                <div class="form-group" style="width:100%;">
                    <label class="pull-left" for="applicantTeaching">Course(s) you are currently teaching: </label>
                    <input type="text" class="pull-right form-control" style="width:60%" name="applicantTeaching"
                           placeholder="e.g. CS1050">
                </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group" style="width:100%;">
                    <label style="line-height:30px;"  class="pull-left" for="applicantDesired">Course(s) You Would Like to Teach (must have taken
                        previously), include grades received: </label>
                    <br>
                    <input style="width:100%;" type="text" class="form-control" style="width:60%" name="applicantDesired"
                           placeholder="e.g. CS1050, CS2050">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group" style="width:100%;">
                    <label style="line-height:30px;"  class="pull-left" for="otherWork">Other places you work: </label>
                    <input style="width:50%;" type="text" class="pull-right form-control" style="width:60%"
                           name="otherWork" placeholder="">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="pull-left form-group" style="width:40%;">
                    <label style="line-height:30px;" class="pull-left" for="speakOPT">SPEAK/OPT score, if applicable:</label>
                    <input style="width:40%" type="text" class="pull-right form-control" style="width:50%"
                           name="speakOPT" placeholder="">
                </div>
                <div class="pull-right form-group" style="width:40%;">
                    <label  style="line-height:30px;" class="pull-left" for="lastSpeak">Semester of last tast:</label>
                    <input style="width:50%;" type="text" class="pull-right form-control" style="width:50%"
                           name="lastSpeak" placeholder="">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <div class="pull-left">
                    <b style="text-decoration:underline">Per CS Dept. policy:</b>
                    <br>
                    <li style="margin-left:50px">TA's must not exceed half-time total employment within the University system including, but not limited to, the CS department.</li>
                    <li style="margin-left:50px">New TAs, ITAs, and PLAs who have received an appointment, are required to participate in the GATO (Graduate Assistant Teaching Orientation), which is offered just prior to the start of fall and winter terms. (You do not need to attend more than once.)
                        <div class="radio">
                            <label style="line-height:30px;" >Requirement Met:</label>
                                <input type="radio" name="gatoRequirement" value="true">
                            <label style="line-height:30px;padding-left:20px" >Will Attend in Aug/Jan (If selected):</label>
                                <input type="radio" name="gatoRequirement" value="false">
                        </div>
                    </li>
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <div class="pull-left">
                    <b style="text-decoration:underline">INTERNATIONAL STUDENTS, PLEASE BE AWARE OF THE FOLLOWING:</b>
                    <br>
                    <li style="margin-left:50px">A potential ITA is required to have satisfactorily completed at least one semester as a student at the University of Missouri before being considered for a TA position.</li>
                    <li style="margin-left:50px">Prior to becoming a TA, any ITA (International Teaching Assistant) who received their primary and secondary education in a country where English is not the principal language <b style="text-decoration:underline">are required by law to be assessed for English proficiency (SPEAK test). If you do not register for and satisfy applicable language assessment requirements, you will not be eligible to accept a TA appointment.</b> Arrangements for language assessments must be made before the end of the semester prior to accepting a TA position.
                        <div class="radio" style="vertical-align: middle;">
                            <label style="line-height:30px;" >Requirement Met:</label>
                            <input type="radio" name="speakRequirement" value="true">
                            <label style="line-height:30px;padding-left:20px"> Requirement not met, registered for speak (date):</label>
                            <input type="date" class="form-control" name="speakDate" value="false"  placeholder="mm/dd/yyyy">
                        </div>
                    </li>
                    <li style="margin-left:50px">ONITA, is a <b style="text-decoration: underline">requirement for all international TAs and PLAs</b> who have not previously attended this orientation. You cannot have a TA/PLA appointment until this requirement has been met.
                        <br>
                        <div class="radio">
                            <label style="line-height:30px;" >Requirement Met:</label>
                            <input type="radio" name="onitaRequirement" value="true">
                            <label style="line-height:30px;padding-left:20px" >Will Attend in Aug/Jan (If selected):</label>
                            <input class="col-md-offset-2" type="radio" value="false" name="onitaRequirement">
                        </div>
                    </li>
                </div>
            </div>

            <br>
            <br>

            <div class="container text-center" style="width:inherit;">
                <button type="submit" class="btn btn-xl">Submit</button>
            </div>
        {!!  Form::close()  !!}
@endsection
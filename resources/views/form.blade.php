@extends('app')


@section('content')
<!-- Header -->
<header style="height:100vh; background-color: #222">

    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"">Welcome To The TA/PLA Application Form!</div>
            <a href="#apply" class="page-scroll btn btn-xl">Apply Now!</a>
        </div>
    </div>


</header>



<!-- Application Section -->
<section id="apply">
    <div class="container">
        <!--mutli level columns-->
        <div class="col-md-8 col-md-offset-2 text-center">
            <h2>COMPUTER SCIENCE DEPARTMENT</h2>

            <div class="col-md-8 col-md-offset-2 text-center">
                <h4> GRADUATE TEACHING ASSISTANT APPLICATION</h4>

                <div class="col-md-8 col-md-offset-2 text-center">
                    <u>Deadline:</u> <label id="deadlineDateLabel">Put Date Here </label>
                </div>
            </div>
        </div>
    </div>
    <div>
        <br>
    </div>

    <div class="container" style="max-width:1000px;margin 0 auto;">
        <form class="form-inline" method="POST">
            <div class="container" style="width:50%;">
                <div class="radio pull-left">
                    <label>
                        <input type="radio" name="schoolStandingOption" id="graduateStudent" value="gradStudent">
                        TA(Graduate Student)
                    </label>
                </div>
                <div class="radio pull-right">
                    <label>
                        <input type="radio" name="schoolStandingOption" id="undergraduteStudent" value="undergrad">
                        PLA(Undergradute Student)
                    </label>
                </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container text-center" style="width:inherit"> <!--text inputs for name, ID, GPA -->
                <div class="form-group pull-left">
                    <label for="applicantName">Name </label>
                    <input type="text" class="form-control" id="applicantName" placeholder="Put Name Here">
                </div>

                <div class="form-group">
                    <label for="applicantID">ID </label>
                    <input type="text" class="form-control" id="applicantID" placeholder="Student ID">
                </div>

                <div class="form-group pull-right">
                    <label for="applicantGPA">GPA </label>
                    <input type="text" class="form-control" id="applicantGPA" placeholder="#.##">
                </div>
            </div>
            <div>
                <br>
            </div>

            <div class="container" style="width:inherit">
                <!--text input for undergrad student applicant to put in program and level -->

                <label class="pull-left" for="undergradApplicantStanding"><u>If Undergraduate</u> applying for PLA,
                    indicate
                    program and level </label>
                <input type="text" class="form-control pull-right" id="undergradApplicantStanding"
                       placeholder="CS BS sr">
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group pull-left">
                    <div class="radio">
                        <label>
                            <i>If Graduate</i>
                            <input type="radio" name="gradStudentProgram" id="graduateProgramMS" value="MS">
                            MS
                        </label>
                        <label>
                            <input class="col-md-offset-2" type="radio" name="gradStudentProgram"
                                   id="graduateProgramPHD"
                                   value="Phd">
                            Phd
                        </label>
                    </div>
                </div>

                <div class="form-group pull-right">
                    <label for="gradAdvisor">Advisor: </label>
                    <input type="text" class="form-control" id="gradAdvisor" placeholder="Advisor Name Here">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group pull-left">
                    <label for="applicantPhone">Phone: </label>
                    <input type="text" class="form-control" id="applicantPhone" placeholder="(###)-###-####">
                </div>
                <div class="form-group pull-right">
                    <label for="applicantEmail">Mizzou Email: </label>
                    <input type="text" class="form-control" style="width:400px;" id="applicantEmail"
                           placeholder="pawprint@mail.missouri.edu">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group" style="width:100%">
                    <label class="pull-left" for="applicantGraduation">Anticipated Graduation Date: </label>
                    <input type="text" class="pull-right form-control" id="applicantGraduation"
                           placeholder="mm/dd/yyyy">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
               <div class="form-gorup" style="width: 100%;">
                   <label class="pull-left" for="applicantHaveTaught">Course(s) you have previously taught: </label>
                   <input type="text" class="pull-right form-control" style="width: 60%;" id="applicantHaveTaught" placeholder="e.g. CS1050">
               </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit;">
                <div class="form-group" style="width:100%;">
                    <label class="pull-left" for="applicantTeaching">Course(s) you are currently teaching: </label>
                    <input type="text" class="pull-right form-control" style="width:60%" id="applicantTeaching"
                           placeholder="e.g. CS1050">
                </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group" style="width:100%;">
                    <label class="pull-left" for="applicantDesired">Course(s) You Would Like to Teach (must have taken
                        previously), include grades received: </label>
                    <br>
                    <input style="width:100%;" type="text" class="form-control" style="width:60%" id="applicantDesired"
                           placeholder="e.g. CS1050, CS2050">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="form-group" style="width:100%;">
                    <label class="pull-left" for="applicantDesired">Other places you work: </label>
                    <input style="width:50%;" type="text" class="pull-right form-control" style="width:60%"
                           id="applicantDesired" placeholder="">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="pull-left form-group" style="width:40%;">
                    <label class="pull-left" for="applicantDesired">SPEAK/OPT score, if applicable:</label>
                    <input style="width:40%;" type="text" class="pull-right form-control" style="width:50%"
                           id="applicantDesired" placeholder="">
                </div>
                <div class="pull-right form-group" style="width:40%;">
                    <label class="pull-left" for="applicantDesired">Semester of last test:</label>
                    <input style="width:50%;" type="text" class="pull-right form-control" style="width:50%"
                           id="applicantDesired" placeholder="">
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
                            <label>Requirement Met:</label>
                                <input type="radio" name="gatoRequirement" id="gatoMet">
                            <label>Will Attend in Aug/Jan (If selected):</label>
                                <input class="col-md-offset-2" type="radio" name="gatoRequirement" id="gatoWillAttend">
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
                        <div class="radio">
                            <label>Requirement Met:</label>
                            <input type="radio" name="speakRequirement" id="speakMet">
                            <label>Registered for speak (date):</label>
                            <input type="text" class="form-control" name="speakRequirement" id="speakDate"  placeholder="mm/dd/yyyy">
                        </div>
                    </li>
                    <li style="margin-left:50px">ONITA, is a <b style="text-decoration: underline">requirement for all international TAs and PLAs</b> who have not previously attended this orientation. You cannot have a TA/PLA appointment until this requirement has been met.
                        <br>
                        <div class="radio">
                            <label>Requirement Met:</label>
                            <input type="radio" name="onitaRequirement" id="onitaMet">
                            <label>Will Attend in Aug/Jan (If selected):</label>
                            <input class="col-md-offset-2" type="radio" name="onitaRequirement" id="onitaWillAttend">
                        </div>
                    </li>
                </div>
            </div>

            <br>
            <br>

            <div class="container text-center" style="width:inherit;">
                <div class="intro-text">
                    <button type="submit" class="btn btn-xl">Submit Changes</button>
                </div>
            </div>
        </form>
</section>

@stop
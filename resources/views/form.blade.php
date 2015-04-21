<<<<<<< Updated upstream
<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TA/PLA Application Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- link to incorporate css with framework
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"> 
    -->

    <!-- Custom CSS -->
    <link href="/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">TA/PLA Application</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a href="/">Login</a>
                </li>
                <li>
                    <a href="form">Application</a>
                </li>
                <li>
                    <a href="admin">Admin</a>
                </li>
                <li>
                    <a href="instructor">Instructor</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- Just a little bar at the bottom to tell me if submission succeeded or not -->
    @if($errors->any())
    <header>
        <div class="container">
            <h4>{{$errors->first()}}</h4>
        </div>
    </header>
    @endif
    <!-- /.container-fluid -->
</nav>
=======
@extends('app')
@section('content')
>>>>>>> Stashed changes
=======
@extends('app')
@section('content')
>>>>>>> Stashed changes

<!-- Application Section -->
    <div class="container">
        <!--mutli level columns-->
        <div class="col-md-8 col-md-offset-2 text-center">
            <h2>COMPUTER SCIENCE DEPARTMENT</h2>

            <div class="col-md-8 col-md-offset-2 text-center">
                <h4> GRADUATE TEACHING ASSISTANT APPLICATION</h4>

                <div class="col-md-8 col-md-offset-2 text-center">
                    <u>Deadline:</u> <label  style="line-height:30px;"  id="deadlineDateLabel">Put Date Here </label>
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
                        <input type="radio" name="schoolStandingOption" value="TA">
                    </label>
                </div>
                <div class="radio"">
                    <label style="line-height:30px;" >
                        PLA (Undergradute Student)
                        <input type="radio" name="schoolStandingOption" value="PLA">
                    </label>
                </div>
                <div class="radio pull-right">
                    <label style="line-height:30px;" >
                        ITA (International Student)
                        <input type="radio" name="schoolStandingOption" value="ITA">
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
                    <input type="number" step="any" min="0" max="4" class="form-control" name="applicantGPA" placeholder="#.##">
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                            <input type="radio" name="gradStudentProgram" id="graduateProgramMS" value="MS">
=======
                            <input type="radio" name="gradStudentProgram" id="graduateProgramMS" value="Masters">
>>>>>>> Stashed changes
=======
                            <input type="radio" name="gradStudentProgram" id="graduateProgramMS" value="Masters">
>>>>>>> Stashed changes
                        </label>
                        <label style="line-height:30px;padding-left:10px" >
                            Phd
                            <input class="col-md-offset-2" type="radio" name="gradStudentProgram"
                                   id="graduateProgramPHD"
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                                   value="Phd">
=======
                                   value="PHD">
>>>>>>> Stashed changes
=======
                                   value="PHD">
>>>>>>> Stashed changes
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
                    <label style="line-height:30px;"  for="applicantPhone">Phone: </label>
                    <input type="tel" class="form-control" name="phone">
                </div>
                <div class="form-group pull-right">
                    <label style="line-height:30px;"  for="applicantEmail">Mizzou Email: </label>
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
                    <label style="line-height:30px;"  class="pull-left" for="applicantGraduation">Anticipated Graduation Date: </label>
                    <input type="date" class="pull-right form-control" name="graduationDate"
                           placeholder="mm/dd/yyyy">
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
<<<<<<< Updated upstream
=======
               <div class="form-gorup" style="width: 100%;">
                   <label class="pull-left" for="applicantHaveTaught">Course(s) you have previously taught: </label>
                   <input type="text" class="pull-right form-control" style="width: 60%;" name="applicantHaveTaught" placeholder="e.g. CS1050">
               </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width:inherit;">
>>>>>>> Stashed changes
                <div class="form-group" style="width:100%;">
                    <label style="line-height:30px;"  class="pull-left" for="applicantTeaching">Courses you are currently teaching: </label>
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
                    <label style="line-height:30px;"  class="pull-left" for="applicantDesired">Other places you work: </label>
                    <input style="width:50%;" type="text" class="pull-right form-control" style="width:60%"
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                           name="otherWork" value="" placeholder="">
=======
                           name="otherWork">
>>>>>>> Stashed changes
=======
                           name="otherWork">
>>>>>>> Stashed changes
                </div>
            </div>
            <div>
                <br>
            </div>
            <div class="container" style="width:inherit;">
                <!--radio button and text input for graduate student applicant to put in level and advisor's name -->
                <div class="pull-left form-group" style="width:40%;">
                    <label style="line-height:30px;" class="pull-left" for="applicantDesired">SPEAK/OPT score, if applicable:</label>
                    <input style="width:40%" type="number" class="pull-right form-control" style="width:50%"
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                           name="speakOPT" placeholder="">
=======
                           name="speakOPT">
>>>>>>> Stashed changes
=======
                           name="speakOPT">
>>>>>>> Stashed changes
                </div>
                <div class="pull-right form-group" style="width:40%;">
                    <label  style="line-height:30px;" class="pull-left" for="applicantDesired">Semester of last tast:</label>
                    <input style="width:50%;" type="text" class="pull-right form-control" style="width:50%"
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                           name="lastSpeak" placeholder="">
=======
                           name="lastSpeak">
>>>>>>> Stashed changes
=======
                           name="lastSpeak">
>>>>>>> Stashed changes
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
                                <input type="radio" name="gatoRequirement" value='true'>
                            <label style="line-height:30px;padding-left:20px" >Will Attend in Aug/Jan (If selected):</label>
                                <input type="radio" name="gatoRequirement" value="WillAttend">
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
                            <input type="radio" name="speakRequirement" value='true'>
                            <label style="line-height:30px;padding-left:20px"> Requirement not met, registered for speak (date):</label>
                            <input type="date" class="form-control" name="speakDate" value="WillAttend" placeholder="mm/dd/yyyy">
                        </div>
                    </li>
                    <li style="margin-left:50px">ONITA, is a <b style="text-decoration: underline">requirement for all international TAs and PLAs</b> who have not previously attended this orientation. You cannot have a TA/PLA appointment until this requirement has been met.
                        <br>
                        <div class="radio">
                            <label style="line-height:30px;" >Requirement Met:</label>
                            <input type="radio" name="onitaRequirement" id="onitaMet" value='true'>
                            <label style="line-height:30px;padding-left:20px" >Will Attend in Aug/Jan (If selected):</label>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                            <input class="col-md-offset-2" type="radio" name="onitaDate" id="onitaWillAttend">
=======
                            <input class="col-md-offset-2" type="radio" name="onitaDate" value='false' id="onitaWillAttend">
>>>>>>> Stashed changes
=======
                            <input class="col-md-offset-2" type="radio" name="onitaDate" value='false' id="onitaWillAttend">
>>>>>>> Stashed changes
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
        {!!  Form::close()  !!}
<<<<<<< Updated upstream
<<<<<<< Updated upstream
</section>

<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- script tag to integrate js with framework
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
-->

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/cbpAnimatedHeader.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/js/agency.js"></script>

</body>

</html>
=======
@endsection

>>>>>>> Stashed changes
=======
@endsection

>>>>>>> Stashed changes

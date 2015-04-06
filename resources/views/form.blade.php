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
<nav class="navbar navbar-default navbar-fixed-top">
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
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header style="height:100vh">
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
                    <u>Deadline:</u> Put Date Here
                </div>
            </div>
        </div>
    </div>
    <div>
        <br>
    </div>

    <div class="container" style="max-width:1000px;margin 0 auto;">
        <form class="form-inline">
            <div class="container" style="width:50%;">
                <div class="radio pull-left">
                    <label>
                        <input type="radio" name="schoolStandingOption" id="graduateStudent" value="gradStudent">
                        TA(Graduate Student)
                    </label>
                </div>
                <div class="radio pull-right">
                    <label>
                        <input type="radio" name="schoolStandingOption" id="undergraduteStudnet" value="undergrad">
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
                <div class="form-group" style="width:100%;">
                    <label class="pull-left" for="applicantTeaching">Courses you are currently teaching: </label>
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
                    <label class="pull-left" for="applicantDesired">Semester of last tast:</label>
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
                <a href="/submit" class="page-scroll btn btn-xl">Submit Application</a>
            </div>
                </div>
        </form>
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

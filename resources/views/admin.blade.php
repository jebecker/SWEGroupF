<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TA/PLA Application Form</title>

    <!-- Bootstrap Core CSS-->
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
    <!-- /.container-fluid -->
</nav>

<!-- Admin Section -->
<section id="admin">
    <div class="container">
        <!--mutli level columns-->
        <div class="col-md-8 col-md-offset-2 text-center">
            <h2>Admin Page</h2>

            <div class="col-md-8 col-md-offset-2 text-center">
                <h4> Change Application Start/End Time Frame</h4>
            </div>
        </div>
    </div>

    <div>
        <br>
    </div>

    <div class="container" style="max-width:1000px;margin 0 auto;">
        <form class="form-inline" method="POST">
           <div class="container text-center" style="width:97%;"><!-- text inputs for admin to change the start and end time fram for the application -->
                <div class="form-group pull-left">
                    <label for="startDateAppTimeFrame">Enter Application Start Date</label>
                    <input type="text" class="form-control" id="startDateAppTimeFrame" placeholder="mm/dd/yyyy">
                </div>
                <div class="form-group pull-right">
                    <label for="endDateAppTimeFrame">Enter Application End Date</label>
                    <input type="text" class="form-control" id="endDateAppTimeFrame" placeholder="mm/dd/yyyy">
                </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container" style="width: inherit;">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h4>Add A New Course</h4>
                </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container text-center" style="width:inherit;"> <!-- create class inputs -->
                        <div class="form-group pull-left col-md-3">
                            <label for="addCourse">Course Name</label>
                            <input type="text" class="form-control" id="addCourse" placeholder="Enter Course Name">
                        </div>
                        <div class="form-group pull-left col-md-3">
                            <label for="instructorName">Instructor Name</label>
                            <input type="text" class="form-control" id="instructorName" placeholder="Enter Instructor Name">
                        </div>
                        <div class="form-group pull-right col-md-3">
                            <label for="numberOfTAs">Number of TA/PLAs Required</label>
                            <input type="text" class="form-control" id="numberOfTAs" placeholder="#">
                        </div>
                        <div class="form-group pull-right col-md-3">
                            <label for="numHoursRequired">Number of Hours Required</label>
                            <input type="text" class="form-control" id="numHoursRequired" placeholder="#">
                        </div>
            </div>

            <div>
                <br>
            </div>

            <div class="container text-center" style="width:inherit;">
                <div class="intro-text">
                    <button type="submit" class="btn btn-xl" id="adminSubmitBTN">Submit Changes</button>
                </div>
            </div>
        </form>
    </div>

</section>


<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script> src="/js/bootstrap.min.js"></script>

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

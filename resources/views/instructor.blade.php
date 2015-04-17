<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Instructor Page</title>

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

    <!-- custom css for dataTables -->
    <script src="//cdn.datatables.net/1.10.6/css/jquery.dataTables.css"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css"></script>

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
            <a class="navbar-brand page-scroll" href="#page-top">Instructor Page</a>
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



<section id = "instructor">
    <div class="container">
        <!--mutli level columns-->
        <div class="col-md-8 col-md-offset-2 text-center">
            <h2>Instructor Page</h2>
        </div>
    <div>
        <br>
    </div>

   </div>

     <div class="container" style="width:1400px;margin 0 auto;">
         
        <div>
            <br>
        </div>

        <form class="form-horizontal"> <!-- instructor form to select an applicant, rate them, and add comments if necessary-->
            <div class="container" style="max-height: 300px; min-width: 1400px; overflow: auto;">
                <table class="table table-bordered display" id="applicationTable"> <!--applicant table -->
                    <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>GPA</th>
                        <th>Graduate/Undergrad Student</th>
                        <th>Program and Level</th>
                        <th>Graduate Advisor</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Anticipated Graduation Date</th>
                        <th>Courses They Teach</th>
                        <th>Courses They Would Like To Teach</th>
                        <th>SPEAK/OPT Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td id="applicantCheckBox">
                            <select id="preferenceRank">
                                <option value="">N/A</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                            </select>
                        </td>
                        <td id="name">John Doe</td>
                        <td id="ID">18052537</td>
                        <td id="GPA">3.63</td>
                        <td id="grad_undergrad">Undergradute</td>
                        <td id="programLevel">BS CS jr</td>
                        <td id="gradAvisor">Adrianna Wheeler</td>
                        <td id="phone">3141234567</td>
                        <td id="email">jebd4f@mail.missouri.edu</td>
                        <td id="gradDate">5/16/16</td>
                        <td id="taughtCourses">CS 1050, CS 2050</td>
                        <td id="wantedCourses">IT 4500, CS 3330</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantCheckBox">
                            <select id="preferenceRank">
                                <option value="">N/A</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                            </select>
                        </td>
                        <td id="name">John Doe</td>
                        <td id="ID">18052537</td>
                        <td id="GPA">3.63</td>
                        <td id="grad_undergrad">Undergradute</td>
                        <td id="programLevel">BS CS jr</td>
                        <td id="gradAvisor">Adrianna Wheeler</td>
                        <td id="phone">3141234567</td>
                        <td id="email">jebd4f@mail.missouri.edu</td>
                        <td id="gradDate">5/16/16</td>
                        <td id="taughtCourses">CS 1050, CS 2050</td>
                        <td id="wantedCourses">IT 4500, CS 3330</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantCheckBox">
                            <select id="preferenceRank">
                                <option value="">N/A</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                            </select>
                        </td>
                        <td id="name">John Doe</td>
                        <td id="ID">18052537</td>
                        <td id="GPA">3.63</td>
                        <td id="grad_undergrad">Undergradute</td>
                        <td id="programLevel">BS CS jr</td>
                        <td id="gradAvisor">Adrianna Wheeler</td>
                        <td id="phone">3141234567</td>
                        <td id="email">jebd4f@mail.missouri.edu</td>
                        <td id="gradDate">5/16/16</td>
                        <td id="taughtCourses">CS 1050, CS 2050</td>
                        <td id="wantedCourses">IT 4500, CS 3330</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantCheckBox">
                            <select id="preferenceRank">
                                <option value="">N/A</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                            </select>
                        </td>
                        <td id="name">John Doe</td>
                        <td id="ID">18052537</td>
                        <td id="GPA">3.63</td>
                        <td id="grad_undergrad">Undergradute</td>
                        <td id="programLevel">BS CS jr</td>
                        <td id="gradAvisor">Adrianna Wheeler</td>
                        <td id="phone">3141234567</td>
                        <td id="email">jebd4f@mail.missouri.edu</td>
                        <td id="gradDate">5/16/16</td>
                        <td id="taughtCourses">CS 1050, CS 2050</td>
                        <td id="wantedCourses">IT 4500, CS 3330</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    </tbody>
                </table>

            </div>

            <div>
                <br>
            </div>


        <div class = "container text-center col-md-offset-2 col-md-8">

            <h4>Comment On Applicant</h4>

            <textarea class="form-control" id="applicantComment" rows="3"></textarea>

            <div>
                <br>
            </div>

            <div class="container text-center col-md-offset-2 col-md-8" style="width:inherit;">
                <div class="intro-text">
                    <button type="submit" class="btn btn-xl" id="instructorSubmitBTN">Submit</button>
                </div>
            </div>
        </div>
    </form>
 </div>
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

<!-- dataTables js library (requires jquery) -->
<script src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<!-- custom js to use data tables -->
<script>

    $(document).ready(function()
    {
        var table = $('#applicationTable').DataTable();

        $('#applicationTable tbody').on('click', 'tr', function ()
        {
            $(this).toggleClass('active');
        });

        $('#button').click( function () {
            alert( table.rows('.active').data().length +' row(s) selected' );
        } );
    });


</script>

</body>

</body>

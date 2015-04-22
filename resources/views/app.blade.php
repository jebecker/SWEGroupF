<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>TA/PLA Application</title>

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

	<!-- custom css for dataTables-->
	<script src="//cdn.datatables.net/1.10.6/css/jquery.dataTables.css"></script>
	<script src="//cdn.datatables.net/fixedheader/2.1.2/css/dataTables.fixedHeader.css"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css"></script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="form">Application</a>
								</li>
								<li>
									<a href="admin">Admin</a>
								</li>
								<li>
									<a href="instructor">Instructor</a>
								</li>
								<li>
									<a href="/auth/logout">Logout</a>
								</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
		@if($errors->any())
		<div style="text-align: center">
			<h4 style="color:#ffffff">{{$errors->first()}}</h4>
		</div>
		@endif
	</nav>

	@yield('content')

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

	<!-- dataTables js library (requires jquery)-->
	<script src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/fixedheader/2.1.2/js/dataTables.fixedHeader.min.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js"></script>

	<!-- custom js to use data tables	-->
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

		function changeCSS(){
			var elem = document.getElementById("tableDiv");
			elem.style.display = "block";

			var elem2 = document.getElementById("commentDiv");
			elem2.style.display = "block";
		}


	</script>
</body>
</html>

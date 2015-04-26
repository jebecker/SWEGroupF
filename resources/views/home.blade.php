@extends('app')

@section('content')
@if(Auth::user()->user_type === "student")
<div class="container">

	<div class="container" style="width: inherit;">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h4>Review Application(s)</h4>
		</div>
	</div>

	<div>
		<br>
		<br>
		<br>
	</div>

	<div class="container col-md-12" id="applicationReviewTableDiv"  style="max-height: 300px; width: inherit; overflow: auto;">
		<table class="table table-condensed table-bordered table-responsive display" id="studentReviewAppTable"> <!--applicant table -->
			<thead>
			<tr>
				<th>View/Edit</th>
				<th>Name</th>
				<th>Date Submitted</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td id="viewEdit"><a href="form">Edit</a></td>
				<td id="name">John Doe</td>
				<td id="dateSubmitted">4/20/15</td>
			</tr>
			<tr>
				<td id="viewEdit"><a href="form">View</a></td>
				<td id="name">John Doe</td>
				<td id="dateSubmitted">4/20/14</td>
			</tr>
			<tr>
				<td id="viewEdit"><a href="form">View</a></td>
				<td id="name">John Doe</td>
				<td id="dateSubmitted">4/20/13</td>
			</tr>
			</tbody>
		</table>

	</div>
</div>
@else
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endsection

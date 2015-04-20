
@extends('app')

@section('content')

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

@stop
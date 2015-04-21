
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


            <div>
                <br>
            </div>

            

        <form class="form-horizontal"> <!-- Admin form for an administrator to select a class and assign TA/PLAs to that class-->
            <!-- dropdown list for admin to pick the course they want to assign applicants to -->
            <div class="container" style="width: inherit;">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h4>Assign Applicant to a Course</h4>
                </div>
            </div>
            <div class="container col-md-2">
                <label class="pull-left" for="pickCourseDropDown">Select a Course</label>
                <select class="form-control" id="pickCourseDropDown" onchange="changeCSS();">
                    <option value="">Select a Course</option>
                    <option value="CS 1050">CS 1050</option>
                    <option value="CS 2050">CS 2050</option>
                    <option value="CS 4050">CS 4050</option>
                    <option value="CS 4320">CS 4320</option>
                </select>

                <div>
                    <br>
                </div>

            </div>

            <div>
                <br>
            </div>

             <div class="container" id="tableDiv" hidden style="max-height: 300px; max-width: 1400px; overflow: auto;"><!-- NOTE: Add "hidden" before style to hide table. -->
                <table class="table table-condensed table-bordered table-responsive display" id="applicationTable"> <!--applicant table -->
                    <thead>
                    <tr>
                        <th>Add to Course</th>
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
                        <th>Courses They Have Taught</th>
                        <th>Courses They Would Like To Teach</th>
                        <th>SPEAK/OPT Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td id="applicantCheckBox">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <input type="checkbox" >
                                  </span>
                                </div>
                              </div>
                            </div>
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
                        <td id="currentCourses">CS 1050, CS 2050</td>
                        <td id="taughtCourses">CS 2830</td>
                        <td id="wantedCourses">IT 4500 - A,<br> CS 3330 - A</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantCheckBox">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <input type="checkbox" >
                                  </span>
                                </div>
                              </div>
                            </div>
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
                        <td id="currentCourses">CS 1050, CS 2050</td>
                        <td id="taughtCourses">CS 2830</td>
                        <td id="wantedCourses">IT 4500 - A,<br> CS 3330 - A</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantCheckBox">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <input type="checkbox" >
                                  </span>
                                </div>
                              </div>
                            </div>
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
                        <td id="currentCourses">CS 1050, CS 2050</td>
                        <td id="taughtCourses">CS 2830</td>
                        <td id="wantedCourses">IT 4500 - A,<br> CS 3330 - A</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantCheckBox">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <input type="checkbox" >
                                  </span>
                                </div>
                              </div>
                            </div>
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
                        <td id="currentCourses">CS 1050, CS 2050</td>
                        <td id="taughtCourses">CS 2830</td>
                        <td id="wantedCourses">IT 4500 - A,<br> CS 3330 - A</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    </tbody>
                </table>

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
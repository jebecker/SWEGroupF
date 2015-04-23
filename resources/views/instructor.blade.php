
@extends('app')

@section('content')

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
            <!-- dropdown list for instructor to pick the course they want to see the applicants of -->
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

            <div class="container" id="tableDiv" hidden style="max-height: 300px; max-width: 1400px; overflow: auto;">
                <table class="table table-condensed table-bordered table-responsive display" id="applicationTable"> <!--applicant table -->
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
                            <th>Courses They Have Taught</th>
                            <th>Courses They Would Like To Teach</th>
                            <th>SPEAK/OPT Score</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td id="applicantRank">
                            <select class="form-control" id="preferenceRank">
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
                        <td id="currentCourses">CS 1050, CS 2050</td>
                        <td id="taughtCourses">CS 2830</td>
                        <td id="wantedCourses">IT 4500 - A,<br> CS 3330 - A</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantRank">
                            <select class="form-control" id="preferenceRank">
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
                        <td id="currentCourses">CS 1050, CS 2050</td>
                        <td id="taughtCourses">CS 2830</td>
                        <td id="wantedCourses">IT 4500 - A,<br> CS 3330 - A</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantRank">
                            <select class="form-control" id="preferenceRank">
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
                        <td id="currentCourses">CS 1050, CS 2050</td>
                        <td id="taughtCourses">CS 2830</td>
                        <td id="wantedCourses">IT 4500 - A,<br> CS 3330 - A</td>
                        <td id="speakScore">9000</td>
                    </tr>
                    <tr>
                        <td id="applicantRank">
                            <select class="form-control" id="preferenceRank">
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


        <div class = "container text-center col-md-offset-2 col-md-8" id="commentDiv" hidden>

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


@endsection
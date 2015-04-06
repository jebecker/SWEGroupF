<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 *
	-- Columns:
	--	app_id	- The unique id assigned to each application. Set by a sequence.
	--	sso_id	- The sso_id of the student who submitted the application.
	--	TA_PLA	- Determines if the applicant is applying to be a TA (0) or PLA (1)
	--	name		- Full name of the applicant.
	--	id			- Student id of the applicant.
	--	gpa		- Grade point average of the applicant.
	--	PLA_info	-  Filled out by undergraduates who are applying to be a PLA; ex. CS BA jr.
	--	MS_PHD 	- Indicates whether the graduate applicant is studying for a masters or PHD.
	--	advisorName	- The name of the applicant's advisor.
	--	phoneNum	- The phone number of the applicant.
	--	email	- The email of the applicant.
	-- 	gradDate	- The expected graduation date of the applicant.
	--	coursesTeaching	- Courses in which the student is currently a TA or PLA.
	--	coursesTaught 	- Past courses in which  the student was a TA or PLA.
	--	coursesAndGrades	- The courses for which the student is applying for and grades received in those courses.
	--	otherWork	- Other places the applicant currently works at.
	--	speakScore	- The score on the applicant received on the SPEAK test; international students only.
	--	semLastSpeak 	- The semester in which the applicant last took the SPEAK test; international students only.
	--	GATO_status	- 1 if the student has met the GATO requirement, 0 if they will attend in Aug/Jan if selected.
	--	ONITA_status	- 1 if the student has met the ONITA requirement, 0 if they will attend in Aug/Jan if selected; international students only.
	--	eSig	- The signature of  the applicant.
	--	eDate - The date corresponding to the signature.
	--	submissionDate	- The time upon which the application was submitted; Set automatically by a default value.
	 *
	 *     ***timestamps*****
	 *  -- 	 created_at			- The time when an account is first created. Set automatically by laravel.
	 *  -- 	 updated_at			- The time when an account is last updated. Set automatically by laravel.
	 */
	public function up()
	{
		Schema::create('application', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('application');
	}

}

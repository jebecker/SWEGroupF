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
	--	app_id				- The unique id assigned to each application. Set by a sequence.
	--	sso_id				- The sso_id of the student who submitted the application.
	--	TA_PLA				- Determines if the applicant is applying to be a TA or PLA
	--	name				- Full name of the applicant.
	--	id					- Student id of the applicant. THIS IS NOT THEIR SSO_ID
	--	gpa					- Grade point average of the applicant.
	--	pla_info			-  Filled out by undergraduates who are applying to be a PLA; ex. CS BA jr.
	 * 			WE NEED TO CLARIFY THIS ^^^^^^
	--	degree_track 		- Indicates whether the graduate applicant is studying for a masters or PHD.
	--	advisor_name		- The name of the applicant's graduate advisor.
	--	phone_number		- The phone number of the applicant.
	--	email				- The email of the applicant.
	-- 	graduation_date		- The expected graduation date of the applicant.
	--	courses_teaching	- Courses in which the student is currently a TA or PLA.
	--	courses_taught 		- Past courses in which  the student was a TA or PLA.
	--	courses_and_grades	- The courses for which the student is applying for and grades received in those courses.
	--	other_employment	- Other places the applicant currently works at.
	--	speak_score			- The score on the applicant received on the SPEAK test; international students only.
	--	sem_last_speak 		- The semester in which the applicant last took the SPEAK test; international students only.
	--	GATO_status			- true if the student has met the GATO requirement, false if they will attend in Aug/Jan if selected.
	--	ONITA_status		- true if the student has met the ONITA requirement, false if they will attend in Aug/Jan if selected; international students only.
	 *        HOW ARE WE IMPLEMENTING THIS? (eSig)
	--	eSig				- The signature of  the applicant.
	--	eDate 				- The date corresponding to the signature.
	--  submitted(bool)		- whether or not the application has been submitted. Added so that an applicant can save their application and finish later.
	--	submissionDate		- The time upon which the application was submitted; Set automatically by a default value.
	 *
	 *     ***timestamps*****
	 *  -- 	 created_at			- The time when an account is first created. Set automatically by laravel.
	 *  -- 	 updated_at			- The time when an account is last updated. Set automatically by laravel.
	 */
	public function up()
	{
		Schema::create('application', function(Blueprint $table)
		{
			$table->increments('app_id');
			$table->string('applicant_id');
			$table->enum('application_type', ['TA', 'ITA', 'PLA']);
			$table->string('name');
			$table->string('student_id');
			$table->decimal('gpa',3,2);
			$table->string('pla_info')->nullable();
			$table->enum('degree_track', ['Masters', 'PHD'])->nullable();
			$table->string('advisor_name')->nullable();
			$table->string('phone_number');
			$table->string('email');
			$table->date('graduation_date');
			$table->string('courses_teaching')->nullable();
			$table->string('courses_taught')->nullable();
			$table->string('courses_and_grades')->nullable();
			$table->string('other_employment')->nullable();
			$table->double('speak_score')->nullable();
			$table->string('sem_last_speak')->nullable();
			$table->boolean('gato_status');
			$table->boolean('onita_status')->nullable();
			$table->boolean('submitted');
			$table->timestamp('date_submitted')->nullable();
			$table->timestamps();

			//constraints
			$table->foreign('applicant_id')
					->references('sso_id')->on('users')
					->onDelete('cascade');
			$table->foreign('name')
					->references('name')->on('users')
					->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::dropIfExists('application');
	}

}

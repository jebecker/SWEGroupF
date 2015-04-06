<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 * -- Table: public.section
	-- Columns:
	--    course_id	- Identifies the course the section is a part of. References course.
	--    section  - The section number of the course. e.g. cs1050 section G
	--    sso_id 		- The sso_id of the instructor teaching the course. References users.
	 *
	 *     ***timestamps*****
	 * -- 	 created_at			- The time when an account is first created. Set automatically by laravel.
	 *  -- 	 updated_at			- The time when an account is last updated. Set automatically by laravel.
	 */
	public function up()
	{
		Schema::create('section', function(Blueprint $table)
		{
			$table->integer('course_id')->unsigned();
			$table->string('instructor');
			$table->string('section');
			$table->timestamps();

			$table->primary(['section', 'course_id']);
			$table->foreign('course_id')
				->references('course_id')->on('course')
				->onDelete('cascade');
			$table->foreign('instructor')
				->references('sso_id')->on('users')
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
		Schema::drop('section');
	}

}

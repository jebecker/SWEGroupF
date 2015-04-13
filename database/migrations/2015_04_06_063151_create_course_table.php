<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 *
	-- Table: public.course
	-- Columns:
	--    course_id     - An id to uniquely identify the course. NOT necessarily the same course number from Myzou.
	--    course_name 	- The name of the course.
	--	  TA_PLA_limit 	- The maximum number of TA's/PLA's that can be assigned to a course.
	 * 		-- does not autoincrement and is unsigned.
	 *
	 *     ***timestamps*****
	 * -- 	 created_at			- The time when an account is first created. Set automatically by laravel.
	 *  -- 	 updated_at			- The time when an account is last updated. Set automatically by laravel.
	 */
	public function up()
	{
		Schema::create('course', function(Blueprint $table)
		{
			$table->increments('course_id');
			$table->string('course_name');
			$table->integer('ta_pla_limit',false,true);
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
		Schema::dropIfExists('course');
	}

}

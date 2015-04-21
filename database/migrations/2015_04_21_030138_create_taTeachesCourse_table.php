<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaTeachesCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
	{
		Schema::create('taTeachesCourse', function(Blueprint $table)
		{
			$table->string('ta_id');
			$table->integer('course_id')->unsigned();
			$table->timestamps();
			
			//constraints
			$table->primary(['ta_id', 'course_id']);
			$table->foreign('ta_id')
					->references('sso_id')->on('users')
					->onDelete('cascade');
			$table->foreign('course_id')
					->references('course_id')->on('course')
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
		Schema::drop('taTeachesCourse');
	}

}

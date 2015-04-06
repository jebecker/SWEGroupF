<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 *
	 *
	 -- Table: public.comments
	 -- Columns:
	 --	comment_id	- A unique ID for each comment. Set by a sequence.
	 --	sso_id 	- The sso_id of the instructor who made the comment. References users.
	 --	app_id	- The ID of the application which the comment is attached to. References application.
	 *
	 *   ***timestamps*****
	 *  -- 	 created_at			- The time when an account is first created. Set automatically by laravel.
	 *  -- 	 updated_at			- The time when an account is last updated. Set automatically by laravel.
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('comment_id');
			$table->string('instructor_id');
			$table->integer('app_id')->unsigned();
			$table->string('comment');
			$table->timestamps();

			//constraints
			$table->foreign('instructor_id')
					->references('sso_id')->on('users')
					->onDelete('cascade');
			$table->foreign('app_id')
					->references('app_id')->on('application')
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
		Schema::dropIfExists('comments');
	}

}

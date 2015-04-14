<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 *
	-- Table: public.log
	-- Columns:
	--    log_id     - A unique ID for the log entry. Set by a sequence.
	--    user_id   - The user whose action generated this log entry. References users.
	--    ip_address - The IP address of the user at the time the log was entered.
	 * Nullable for now until it is implemented on PHP side ^^
	--    log_date   - The date of the log entry. Set automatically by a default value.
	 * Part of timestamps() ^^
	--    action     - What the user did to generate a log entry (i.e., "logged in").
	 *  ***timestamps*****
	 *  -- 	 created_at			- The time when an account is first created. Set automatically by laravel.
	 *  -- 	 updated_at			- The time when an account is last updated. Set automatically by laravel.
	 */
	public function up()
	{
		Schema::create('logs', function(Blueprint $table)
		{
			$table->increments('log_id');
			$table->string('user_id');
			$table->string('ip_address')->nullable();
			$table->string('action');
			$table->timestamps();

			//constraints
			$table->foreign('user_id')
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
		Schema::dropIfExists('logs');
	}

}

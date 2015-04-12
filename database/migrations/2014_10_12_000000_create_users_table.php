<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 *
	 * -- Table: public.user
	 * -- Columns:
	 * --    sso_id          	- Will match what is in LDAP. Also, Uniquely identifies a user.
	 * --    name 				- Full name of the user.
	 * --    user_type          - Identifies the role of the user, which is critical in determining their level of access.
	 * --	 rememberToken		- Used to keep a user logged in. Laravel magic spaghetti.
	 *
	 *     ***timestamps*****
	 * -- 	 created_at			- The time when an account is first created. Set automatically by laravel.
	 *  -- 	 updated_at			- The time when an account is last updated. Set automatically by laravel.
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->string('sso_id')->unique();
			$table->string('name')->unique();
			$table->string('email');
			$table->string('password', 64);
			$table->enum('user_type', ['student','instructor','admin']);
			$table->rememberToken();
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
		Schema::dropIfExists('users');
	}

}

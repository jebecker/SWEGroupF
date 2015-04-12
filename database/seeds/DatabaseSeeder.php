<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//Example. Leave this here.
		// $this->call('UserTableSeeder');
		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('CourseTableSeeder');
		$this->command->info('Course table seeded!');

	}

}

class UserTableSeeder extends Seeder {


	public function run()
	{
		//This line clears the current entries in the User table.
		DB::table('users')->delete();

		User::create([  'sso_id' => 'twn346',
			'name'   => 'Tyler Nivin',
			'email'  => 'twn346@mail.missouri.edu',
			'user_type' => 'student',
			'password' => bcrypt('secret')
		]);

		User::create([  'sso_id' => 'scottg',
			'name'   => 'Grant Scott',
			'email'  => 'scottg@missouri.edu',
			'user_type' => 'instructor',
			'password' => bcrypt('supersecret')
		]);

		User::create([  'sso_id' => 'rlc5m8',
			'name'   => 'Ray',
			'email'  => 'rlc5m8@mail.missouri.edu',
			'user_type' => 'admin',
			'password' => bcrypt('admin')
		]);
	}
}

class CourseTableSeeder extends Seeder {

	public function run()
	{
		//This line clears the current entries in the User table.
		DB::table('course')->delete();

		Course::create([ 	'course_name' => 'cs1050',
							'ta_pla_limit' => '10'
		]);

		Course::create([ 	'course_name' => 'cs2050',
							'ta_pla_limit' => '5'
		]);

		Course::create([ 	'course_name' => 'cs3050',
							'ta_pla_limit' => '2'
		]);
	}
}

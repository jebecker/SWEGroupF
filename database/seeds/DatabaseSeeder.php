<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;
use App\Section;

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

		$this->call('SectionTableSeeder');
		$this->command->info('Section table seeded!');

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

		User::create([  'sso_id' => 'guilliamsd',
			'name'   => 'Donald "Joe" Guilliams',
			'email'  => 'guilliamsd@missouri.edu',
			'user_type' => 'instructor',
			'password' => bcrypt('fred')
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

		Course::create([ 	'course_name' => 'cs4320',
							'ta_pla_limit' => '2'
		]);
	}
}

class SectionTableSeeder extends Seeder {

	public function run()
	{
		//This line clears the current entries in the User table.
		DB::table('section')->delete();

		Section::create([	'course_id' => '1', //cs1050
							'instructor' => 'guilliamsd', //Joe Guilliams
							'section' => 'G'
		]);

		Section::create([	'course_id' => '2', //cs2050
							'instructor' => 'guilliamsd', //Joe Guilliams
							'section' => 'A'
		]);

		Section::create([	'course_id' => '4', //cs4320
							'instructor' => 'scottg', //Grant Scott
							'section' => 'A'
		]);
	}
}



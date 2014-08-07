<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('ScorecardsTableSeeder');
		$this->command->info('Scorecards table seeded!');
    }

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sc_users')->truncate();
		DB::table('sc_users')->delete();

		User::insert(
			array(
				array(
					'username' => 'foo@bar.com', 
					'password' => Hash::make('123'),
					'created_at' => new dateTime,
					'updated_at' => new dateTime
				),
				array(
					'username' => 'james@bar.com', 
					'password' => Hash::make('123'),
					'created_at' => new dateTime,
					'updated_at' => new dateTime
				),
				array(
					'username' => 'gary@bar.com', 
					'password' => Hash::make('123'),
					'created_at' => new dateTime,
					'updated_at' => new dateTime
				),
				array(
					'username' => 'tom@bar.com', 
					'password' => Hash::make('123'),
					'created_at' => new dateTime,
					'updated_at' => new dateTime
				)
			)
		);
	}
}


class ScorecardsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sc_scorecards')->truncate();
		DB::table('sc_scorecards')->delete();

		Scorecards::insert(
			array(
				array(
					'user_id' => '1',
					'template_id' => NULL,
					'course_name' => 'Hazlemere',
					'played_date' => '2014-07-05', 
					'hole1' => '4',
					'hole2' => '5',
					'hole3' => '3',
					'hole4' => '5',
					'hole5' => '3',
					'hole6' => '4',
					'hole7' => '4',
					'hole8' => '4',
					'hole9' => '4',
					'hole10' => '3',
					'hole11' => '5',
					'hole12' => '4',
					'hole13' => '5',
					'hole14' => '4',
					'hole15' => '3',
					'hole16' => '4',
					'hole17' => '3',
					'hole18' => '4',
					'type' => 'T'
				),
				array(
					'user_id' => '1',
					'template_id' => '1',
					'course_name' => 'Hazlemere',
					'played_date' => '2014-07-05', 
					'hole1' => '5',
					'hole2' => '4',
					'hole3' => '4',
					'hole4' => '4',
					'hole5' => '2',
					'hole6' => '5',
					'hole7' => '5',
					'hole8' => '5',
					'hole9' => '5',
					'hole10' => '3',
					'hole11' => '5',
					'hole12' => '3',
					'hole13' => '6',
					'hole14' => '3',
					'hole15' => '2',
					'hole16' => '3',
					'hole17' => '3',
					'hole18' => '5',
					'type' => 'S'
				),
				array(
					'user_id' => '1',
					'template_id' => '2',
					'course_name' => 'Wycombe Heights',
					'played_date' => '2014-07-05', 
					'hole1' => '5',
					'hole2' => '6',
					'hole3' => '4',
					'hole4' => '5',
					'hole5' => '6',
					'hole6' => '4',
					'hole7' => '4',
					'hole8' => '5',
					'hole9' => '4',
					'hole10' => '3',
					'hole11' => '5',
					'hole12' => '4',
					'hole13' => '5',
					'hole14' => '4',
					'hole15' => '3',
					'hole16' => '4',
					'hole17' => '3',
					'hole18' => '4',
					'type' => 'S'
				),
				array(
					'user_id' => '1',
					'template_id' => '1',
					'course_name' => 'Hazlemere',
					'played_date' => '2014-07-05', 
					'hole1' => '5',
					'hole2' => '6',
					'hole3' => '4',
					'hole4' => '5',
					'hole5' => '6',
					'hole6' => '4',
					'hole7' => '4',
					'hole8' => '5',
					'hole9' => '4',
					'hole10' => '3',
					'hole11' => '5',
					'hole12' => '4',
					'hole13' => '5',
					'hole14' => '4',
					'hole15' => '3',
					'hole16' => '4',
					'hole17' => '3',
					'hole18' => '4',
					'type' => 'S'
				),
				array(
					'user_id' => '1',
					'template_id' => '1',
					'course_name' => 'Hazlemere',
					'played_date' => '2014-07-05', 
					'hole1' => '5',
					'hole2' => '6',
					'hole3' => '4',
					'hole4' => '5',
					'hole5' => '6',
					'hole6' => '4',
					'hole7' => '4',
					'hole8' => '5',
					'hole9' => '4',
					'hole10' => '3',
					'hole11' => '5',
					'hole12' => '4',
					'hole13' => '5',
					'hole14' => '4',
					'hole15' => '3',
					'hole16' => '4',
					'hole17' => '3',
					'hole18' => '4',
					'type' => 'S'
				),
				array(
					'user_id' => '1',
					'template_id' => NULL,
					'course_name' => 'Wycombe Heights',
					'played_date' => '2014-07-05', 
					'hole1' => '4',
					'hole2' => '3',
					'hole3' => '4',
					'hole4' => '5',
					'hole5' => '4',
					'hole6' => '4',
					'hole7' => '4',
					'hole8' => '5',
					'hole9' => '4',
					'hole10' => '3',
					'hole11' => '5',
					'hole12' => '4',
					'hole13' => '5',
					'hole14' => '4',
					'hole15' => '3',
					'hole16' => '4',
					'hole17' => '3',
					'hole18' => '4',
					'type' => 'T'
				),
				array(
					'user_id' => '1',
					'template_id' => '2',
					'course_name' => 'Wycombe Heights',
					'played_date' => '2014-07-05', 
					'hole1' => '8',
					'hole2' => '5',
					'hole3' => '5',
					'hole4' => '4',
					'hole5' => '3',
					'hole6' => '4',
					'hole7' => '5',
					'hole8' => '6',
					'hole9' => '5',
					'hole10' => '4',
					'hole11' => '5',
					'hole12' => '3',
					'hole13' => '4',
					'hole14' => '5',
					'hole15' => '6',
					'hole16' => '5',
					'hole17' => '4',
					'hole18' => '5',
					'type' => 'S'
				)
			)
		);
	}
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sc_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->timestamps();
			$table->string('remember_token');
		});

		Schema::create('sc_scorecards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('template_id');
			$table->integer('user_id');
			$table->string('course_name');
			$table->date('played_date');
			$table->integer('hole1');
			$table->integer('hole2');
			$table->integer('hole3');
			$table->integer('hole4');
			$table->integer('hole5');
			$table->integer('hole6');
			$table->integer('hole7');
			$table->integer('hole8');
			$table->integer('hole9');
			$table->integer('hole10');
			$table->integer('hole11');
			$table->integer('hole12');
			$table->integer('hole13');
			$table->integer('hole14');
			$table->integer('hole15');
			$table->integer('hole16');
			$table->integer('hole17');
			$table->integer('hole18');
			$table->string('type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sc_users');
		Schema::drop('sc_scorecards');
	}

}

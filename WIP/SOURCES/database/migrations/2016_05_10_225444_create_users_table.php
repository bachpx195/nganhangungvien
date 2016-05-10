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
		Schema::create('users', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';

			$table->increments('id');
			$table->string('username', 50)->unique();
			$table->string('full_name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('phone', 20)->nullable();
			$table->tinyInteger('role_id')->default(1);
			$table->boolean('active')->default(1)->comment('0-not active, 1-active');
			$table->rememberToken();
			$table->timestamps();
		});

		DB::statement('ALTER TABLE users ADD FULLTEXT user_name(username)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table) {
			$table->dropIndex('user_name');
		});

		Schema::drop('users');
	}

}

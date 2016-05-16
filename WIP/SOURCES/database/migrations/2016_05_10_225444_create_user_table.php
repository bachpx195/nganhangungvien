<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';

			$table->increments('id');
			$table->string('username', 50)->unique();
			$table->string('full_name', 50);
			$table->string('email')->unique();
			$table->string('password', 20);
			$table->string('phone_number', 20)->nullable();
			$table->string('image', 200)->nullable();
			$table->string('user_type', 20)->default('employer');
			$table->tinyInteger('status')->default(1);
			$table->rememberToken();
			$table->timestamps();
		});

		DB::statement('ALTER TABLE user ADD FULLTEXT user_name(username)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user', function($table) {
			$table->dropIndex('user_name');
		});

		Schema::drop('user');
	}

}

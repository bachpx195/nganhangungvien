<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 100);
			$table->string('image', 200)->nullable();
			$table->text('description')->nullable();
			$table->text('content')->nullable();
			$table->string('link', 100)->nullable();
			$table->string('password', 20)->nullable();

			$table->timestamps();

			//foreign keys
			/*$table->foreign('candidate_id')->references('id')->on('candidate');*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('news');
	}

}

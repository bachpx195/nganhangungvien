<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateForeignLanguageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_foreign_language', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('candidate_id');
			$table->bigInteger('language_id');
			$table->integer('read');
			$table->integer('write');
			$table->integer('listen');
			$table->integer('speak');

			$table->timestamps();

			//foreign keys
			/*$table->foreign('language_id')->references('id')->on('foreign_language');
			 $table->foreign('candidate_id')->references('id')->on('candidate');
			*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('candidate_foreign_language');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaveCvTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('save_cv', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('employer_id');
			$table->bigInteger('candidate_id');

			$table->timestamps();

			//foreign keys
			/*$table->foreign('employer_id')->references('id')->on('employer');
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
		Schema::drop('save_cv');
	}

}

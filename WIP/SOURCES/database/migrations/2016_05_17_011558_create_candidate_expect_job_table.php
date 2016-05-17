<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateExpectJobTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_expect_job', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('candidate_id');
			$table->bigInteger('job_id');

			//foreign keys
			/*$table->foreign('job_id')->references('id')->on('job');
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
		Schema::drop('candidate_expect_job');
	}

}

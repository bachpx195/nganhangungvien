<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateItLevelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_it_level', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('candidate_id');
			$table->integer('word');
			$table->integer('excel');
			$table->integer('power_point');
			$table->integer('out_look');

			$table->timestamps();

			//foreign keys
			/*
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
		Schema::drop('candidate_it_level');
	}

}

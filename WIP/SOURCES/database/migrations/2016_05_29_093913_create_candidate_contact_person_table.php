<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateContactPersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_contact_person', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('candidate_id');
			$table->string('full_name', 100);
			$table->string('company', 100);
			$table->string('phone_number', 20);
			$table->string('office', 100);

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
		Schema::drop('candidate_contact_person');
	}

}

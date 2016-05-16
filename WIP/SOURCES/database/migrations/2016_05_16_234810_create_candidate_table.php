<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('full_name', 50);
			$table->string('email', 50)->unique();
			$table->date('birthday');
			$table->tinyInteger('sex');
			$table->string('phone_number', 20);
			$table->string('image', 200)->nullable();
			$table->bigInteger('province_id');
			$table->string('address', 200);
			$table->string('cv_title', 200);
			$table->bigInteger('level');
			$table->bigInteger('experience_years');
			$table->bigInteger('current_rank');
			$table->bigInteger('expect_rank');
			$table->bigInteger('expect_job');
			$table->bigInteger('expect_salary');
			$table->bigInteger('expect_address');
			$table->bigInteger('exigency');
			$table->text('job_goal')->nullalble();
			$table->string('candidate_code', 20);
			$table->text('skill_forte')->nullable();
			$table->string('attach_cv', 200)->nullable();
			$table->bigInteger('view_total');
			$table->tinyInteger('status')->default(1);
			$table->timestamps();

			//foreign keys
			/*$table->foreign('province_id')->references('id')->on('province');
			$table->foreign('experience_years')->references('id')->on('experience_years');
			$table->foreign('current_rank')->references('id')->on('rank');
			$table->foreign('expect_rank')->references('id')->on('rank');
			$table->foreign('expect_job')->references('id')->on('job');
			$table->foreign('expect_salary')->references('id')->on('salary');
			$table->foreign('expect_address')->references('id')->on('address');
			$table->foreign('exigency')->references('id')->on('exigency');*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('candidate');
	}

}

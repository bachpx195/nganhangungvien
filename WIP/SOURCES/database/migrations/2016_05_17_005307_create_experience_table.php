<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experience', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('candidate_id');
			$table->bigInteger('index')->comment('Số thứ tự kinh nghiệm của 1 ứng viên');
			$table->string('office', 50);
			$table->string('company_name', 200);
			$table->string('salary', 50)->nullable();
			$table->date('day_in')->nullable();
			$table->date('day_out')->nullable();
			$table->text('description')->nullable();

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
		Schema::drop('experience');
	}

}

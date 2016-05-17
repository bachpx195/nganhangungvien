<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateCertificateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidate_certificate', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('candidate_id');
			$table->string('certificate_name')->comment('Tên chứng chỉ');
			$table->string('training_unit')->comment('Đơn vị đào tạo')->nullable();
			$table->string('graduation_type')->comment('Loại tốt nghiệp')->nullable();
			$table->string('specialize')->comment('Chuyên môn')->nullable();
			$table->date('started_at')->nullable();
			$table->date('ended_at')->nullable();

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
		Schema::drop('candidate_certificate');
	}

}

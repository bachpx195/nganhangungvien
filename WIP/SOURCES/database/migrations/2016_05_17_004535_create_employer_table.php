<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('user_id');
			$table->bigInteger('balance')->nullable()->default(0);
			$table->string('phone', 20);
			$table->string('company_name', 100);
			$table->bigInteger('company_size');
			$table->text('company_description');
			$table->string('company_address', 200);
			$table->bigInteger('province_id');
			$table->string('website', 50)->nullable();
			$table->string('contact_person', 50);
			$table->string('contact_phone', 20);
			$table->string('contact_email', 20);
			$table->tinyInteger('status')->default(1);
			
			$table->timestamps();

			//foreign keys
			/*$table->foreign('province_id')->references('id')->on('province');
			$table->foreign('user_id')->references('id')->on('user');
			$table->foreign('company_size')->references('id')->on('company_size');*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employer');
	}

}

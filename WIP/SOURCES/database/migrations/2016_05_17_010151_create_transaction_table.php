<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('employer_id');
			$table->bigInteger('candidate_id');
			$table->integer('payment_type');
			$table->tinyInteger('type');
			$table->bigInteger('balance');
			$table->bigInteger('amount');

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
		Schema::drop('transaction');
	}

}

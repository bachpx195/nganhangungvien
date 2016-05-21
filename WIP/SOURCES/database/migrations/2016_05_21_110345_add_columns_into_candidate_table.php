<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsIntoCandidateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('candidate', function($table) {
			$table->bigInteger('employment_status')->after('exigency');
			$table->tinyInteger('is_married')->after('employment_status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('candidate', function($table) {
			$table->dropColumn('employment_status');
			$table->dropColumn('is_married');
		});
	}

}

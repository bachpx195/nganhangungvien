<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameExpectJobToJobColumnInCandidateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('candidate', function($table) {
			$table->renameColumn('expect_job', 'job');
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
			$table->renameColumn('job', 'expect_job');
		});
	}

}

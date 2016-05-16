<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_permission', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('role_id');
			$table->bigInteger('permission_id');

			//foreign keys
			//$table->foreign('role_id')->references('id')->on('role');
			//$table->foreign('permission_id')->references('id')->on('permission');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_permission');
	}

}

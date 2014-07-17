<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToDogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dogs', function($table)
		{
		$table->integer('user_id')->unsigned();
		$table->foreign('user_id')->references('id')->on('users');
		$table->integer('breed_id')->unsigned();
		$table->foreign('breed_id')->references('id')->on('breeds');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dogs', function($table)
		{
		    $table->dropForeign('dogs_user_id_foreign');
		    $table->dropColumn('user_id');
		});
	}
}

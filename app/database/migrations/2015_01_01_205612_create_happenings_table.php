<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHappeningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('happenings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('location');
			$table->text('details');
			$table->dateTime('start_time');
			$table->dateTime('end_time');
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
		Schema::drop('happenings');
	}

}

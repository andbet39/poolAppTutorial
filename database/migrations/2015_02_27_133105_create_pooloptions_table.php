<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePooloptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pooloptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pool_id')->unsigned();
			$table->string('title');
			$table->integer('vote');
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
		Schema::drop('pooloptions');
	}

}

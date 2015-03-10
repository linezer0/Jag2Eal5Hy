<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('concours_id')->unsigned();
            $table->string('nom', 50);
            $table->smallInteger('capacite');
			$table->timestamps();

            $table->foreign('concours_id')->references('id')->on('concours_categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('salles');
	}

}

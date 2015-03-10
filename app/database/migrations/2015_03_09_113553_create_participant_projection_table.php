<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipantProjectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participant_projection', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('participant_id')->unsigned()->index();
			$table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
			$table->integer('projection_id')->unsigned()->index();
			$table->foreign('projection_id')->references('id')->on('projections')->onDelete('cascade');
			$table->smallInteger('numero_place');
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
		Schema::drop('participant_projection');
	}

}

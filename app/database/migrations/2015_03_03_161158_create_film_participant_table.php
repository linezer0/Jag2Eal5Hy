<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmParticipantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('film_participant', function(Blueprint $table)
		{
			$table->integer('film_id')->unsigned()->index();
			$table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
			$table->integer('participant_id')->unsigned()->index();
			$table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
            $table->primary('film_id', 'participant_id');
            $table->enum('fonction', ['acteur', 'producteur', 'réalisateur', 'scénariste', 'autre']);
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
		Schema::drop('film_participant');
	}

}

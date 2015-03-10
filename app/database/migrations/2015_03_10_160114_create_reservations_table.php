<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('participant_id')->unsigned();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->tinyInteger('duree');
            $table->float('montant_total', 10);
            $table->tinyInteger('nombre_personnes');
			$table->timestamps();

            $table->foreign('participant_id')->references('id')->on('participants');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservations');
	}

}

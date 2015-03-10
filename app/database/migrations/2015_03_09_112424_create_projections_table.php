<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projections', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('film_id')->unsigned();
            $table->integer('salle_id')->unsigned();
            $table->date('date_projection');
            $table->enum('creneau', ['matin', 'apresmidi', 'soiree']);
            $table->enum('credit_projection', [1, 2, 4, 8]);
			$table->smallInteger('places_disponibles');
            $table->smallInteger('places_reservees');
            $table->timestamps();

            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('salle_id')->references('id')->on('salles');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projections');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->dateTime('date_heure_debut');
			$table->dateTime('date_heure_fin');
			$table->integer('film_id')->unsigned();
			$table->integer('salle_id')->unsigned();
			$table->timestamps();

			// Adding foreign keys
			$table->foreign('film_id')
				->references('id')
				->on('films')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->foreign('salle_id')
				->references('id')
				->on('salles')
				->onDelete('cascade')
				->onUpdate('cascade');
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

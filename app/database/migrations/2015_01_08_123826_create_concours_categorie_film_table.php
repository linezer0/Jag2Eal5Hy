<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConcoursCategorieFilmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('concours_categorie_film', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('concours_categorie_id')->unsigned()->index();
			$table->integer('film_id')->unsigned()->index();
			$table->timestamps();

			// Adding foreign keys
			$table->foreign('concours_categorie_id')
				->references('id')
				->on('concours_categories')
				->onDelete('cascade');
			$table->foreign('film_id')
				->references('id')
				->on('films')
				->onDelete('cascade');


		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('concours_categorie_film');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFilms extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('films', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('libelle', 80)->unique()->index();
			$table->date('date_sortie');
			$table->integer('duree');
			$table->string('nationalite');
			$table->integer('film_categorie_id')->unsigned();
			$table->timestamps();

			// Adding foreign keys
			$table->foreign('film_categorie_id')
				->references('id')
				->on('film_categories')
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
		Schema::drop('films');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmsTable extends Migration {

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
            $table->integer('categorie_film')->unsigned();
            $table->integer('categorie_concours')->unsigned();
            $table->string('nom', 50);
            $table->date('date_sortie');
            $table->smallInteger('duree');
            $table->string('nationalite', 30);
            $table->text('synopsis', 500);
            $table->integer('budget');
			$table->timestamps();

            $table->foreign('categorie_film')->references('id')->on('films_categories');
            $table->foreign('categorie_concours')->references('id')->on('concours_categories');
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

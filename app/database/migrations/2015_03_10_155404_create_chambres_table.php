<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChambresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chambres', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('hebergement_no_siret')->unsigned();
            $table->string('libelle',50);
            $table->integer('capacite');
            $table->enum('type', ['simple','double','suite']);
            $table->enum('statut', ['disponible','indisponible']);
            $table->float('prix_chambre',10);
			$table->timestamps();

            $table->foreign('hebergement_no_siret')->references('no_siret')->on('hebergements');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chambres');
	}

}

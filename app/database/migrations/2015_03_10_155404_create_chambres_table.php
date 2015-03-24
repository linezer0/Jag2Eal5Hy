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
            $table->string('hebergement_no_siret',14);
            $table->string('libelle',50);
            $table->integer('capacite');
            $table->enum('type_chambre', ['simple','double','suite']);
            $table->float('prix_chambre',10);
			$table->timestamps();

            $table->foreign('hebergement_no_siret')->references('no_siret')->on('hebergements')->onDelete('cascade');
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

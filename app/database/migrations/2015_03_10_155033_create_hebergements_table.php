<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHebergementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hebergements', function(Blueprint $table)
		{
            $table->integer('no_siret')->unsigned();
            $table->primary('no_siret');
            $table->string('nom',50);
            $table->string('adresse', 100);
            $table->enum('etoiles', [0, 1, 2, 3, 4, 5]);
            $table->enum('type_hebergement', ['auberge','hotel', 'villa']);
            $table->string('nom_contact',50);
            $table->string('mail_contact',50);
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
		Schema::drop('hebergements');
	}

}

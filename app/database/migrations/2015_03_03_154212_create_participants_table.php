<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participants', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('utilisateur_id')->unsigned();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->date('date_naissance');
            $table->string('telephone', 20);
            $table->string('email', 50);
            $table->enum('role', ['employe_media', 'employe_film', 'jury', 'invite','autre']);
            $table->enum('niveau_accreditation', [0, 1, 2, 3, 4, 5, 6]);
            $table->tinyInteger('credits');
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
		Schema::drop('participants');
	}

}

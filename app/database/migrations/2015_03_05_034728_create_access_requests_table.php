<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('access_requests', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->date('date_naissance');
            $table->string('telephone', 20);
            $table->string('email', 50);
            $table->enum('role', ['employe_media', 'employe_film', 'jury', 'invite','autre']);
            $table->string('entreprise', 50);
            $table->text('justification');
            $table->string('statut', 20);
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
		Schema::drop('access_requests');
	}

}

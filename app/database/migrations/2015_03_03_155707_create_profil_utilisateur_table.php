<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilUtilisateurTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profil_utilisateur', function(Blueprint $table)
		{
			$table->integer('profil_id')->unsigned()->index();
			$table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
			$table->integer('utilisateur_id')->unsigned()->index();
			$table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');
            $table->primary('profil_id', 'utilisateur_id');
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
		Schema::drop('profil_utilisateur');
	}

}

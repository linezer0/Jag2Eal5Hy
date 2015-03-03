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
			$table->string('nom', 30);
			$table->string('prenom', 30);
			$table->string('email');
			$table->date('date_naissance');
			$table->string('role', 30);
			$table->string('entreprise');
			$table->text('justification');
			$table->text('statut', 15);
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

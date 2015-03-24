<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateParticipantProjectionChangeNumeroPlaceToPlaces extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('participant_projection', function(Blueprint $table)
		{
			$table->dropColumn('numero_place');
            $table->tinyInteger('places');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('places', function(Blueprint $table)
		{

		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateReservationsTableDropNombrePersonnes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reservations', function(Blueprint $table)
		{
			$table->dropColumn('nombre_personnes');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reservations', function(Blueprint $table)
		{
            $table->tinyInteger('nombre_personnes', 4);

        });
	}

}

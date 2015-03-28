<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateReservationsTableDropNoSiretReplaceWithChambreId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reservations', function(Blueprint $table)
		{
            $table->dropForeign('reservations_no_siret_foreign');
            $table->dropColumn('no_siret');
            $table->integer('chambre_id')->unsigned()->after('participant_id');
            $table->foreign('chambre_id')->references('id')->on('chambres');
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
            $table->dropColumn('chambre_id');
            $table->string('no_siret', 15)->after('participant_id');
		});
	}

}

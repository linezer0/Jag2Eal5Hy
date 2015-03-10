<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChambreReservationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chambre_reservation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('chambre_id')->unsigned()->index();
			$table->foreign('chambre_id')->references('id')->on('chambres')->onDelete('cascade');
			$table->integer('reservation_id')->unsigned()->index();
			$table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
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
		Schema::drop('chambre_reservation');
	}

}

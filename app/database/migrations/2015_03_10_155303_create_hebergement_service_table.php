<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHebergementServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hebergement_service', function(Blueprint $table)
		{
			$table->integer('hebergement_no_siret')->unsigned()->index();
			$table->foreign('hebergement_no_siret')->references('no_siret')->on('hebergements')->onDelete('cascade');
			$table->integer('service_id')->unsigned()->index();
			$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->primary('hebergement_no_siret', 'service_id');
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
		Schema::drop('hebergement_service');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaParticipantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_participant', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('media_no_siret')->unsigned()->index();
			$table->foreign('media_no_siret')->references('no_siret')->on('medias')->onDelete('cascade');
			$table->integer('participant_id')->unsigned()->index();
			$table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
			$table->string('metier', 50);
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
		Schema::drop('media_participant');
	}

}

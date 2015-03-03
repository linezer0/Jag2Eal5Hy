<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUtilisateursAndParticipants extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('utilisateurs', function(Blueprint $table)
		{
			$table->foreign('participant_id')->references('id')->on('participants');
		});

        Schema::table('participants', function(Blueprint $table)
        {
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('utilisateurs', function(Blueprint $table)
        {
            $table->dropForeign('participant_id');
        });

        Schema::table('participants', function(Blueprint $table)
        {
            $table->dropForeign('utilisateur_id');
        });
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersAndParticipants extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('participant_id')->references('id')->on('participants');
		});

        Schema::table('participants', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropForeign('users_participant_id_foreign');
        });

        Schema::table('participants', function(Blueprint $table)
        {
            $table->dropForeign('participants_user_id_foreign');
        });
	}

}

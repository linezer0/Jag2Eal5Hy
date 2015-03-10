<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create([
            'email' => 'thomas@iaelyon.fr',
            'participant_id' => 1,
            'password' => Hash::make('thomas'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
	}

}
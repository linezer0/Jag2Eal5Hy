<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        $thomas = User::create([
            'email' => 'thomas@iaelyon.fr',
            'participant_id' => null,
            'password' => Hash::make('thomas'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        $william = User::create([
                'email' => 'william@iaelyon.fr',
                'participant_id' => null,
                'password' => Hash::make('william'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
        ]);

        $thomas->assignProfil(Profil::whereLibelle('administrator')->first());
        $william->assignProfil(Profil::whereLibelle('administrator')->first());
	}
}

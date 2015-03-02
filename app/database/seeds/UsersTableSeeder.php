<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'nom' => 'Parker',
			'prenom' => 'Thomas',
			'email' => 'thomas@iaelyon.fr',
			'password' => Hash::make('thomas')
		]);

		User::create([
			'nom' => 'Gouzien',
			'prenom' => 'William',
			'email' => 'william@iaelyon.fr',
			'password' => Hash::make('william')
		]);

		User::create([
			'nom' => 'Malki',
			'prenom' => 'Sanae',
			'email' => 'sanae@iaelyon.fr',
			'password' => Hash::make('sanae')
		]);

		User::create([
			'nom' => 'Chango',
			'prenom' => 'Stéphane',
			'email' => 'stephane@iaelyon.fr',
			'password' => Hash::make('stephane')
		]);

		User::create([
			'nom' => 'Ratou',
			'prenom' => 'Adia',
			'email' => 'adia@iaelyon.fr',
			'password' => Hash::make('adia')
		]);
	}

}

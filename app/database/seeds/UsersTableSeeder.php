<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'username' => 'thomasparker',
			'email' => 'thomas@iaelyon.fr',
			'password' => Hash::make('thomas')
		]);

		User::create([
			'username' => 'williamgouzien',
			'email' => 'william@iaelyon.fr',
			'password' => Hash::make('william')
		]);

		User::create([
			'username' => 'sanaemalki',
			'email' => 'sanae@iaelyon.fr',
			'password' => Hash::make('sanae')
		]);

		User::create([
			'username' => 'stephanechango',
			'email' => 'stephane@iaelyon.fr',
			'password' => Hash::make('stephane')
		]);

		User::create([
			'username' => 'adiaratou',
			'email' => 'adia@iaelyon.fr',
			'password' => Hash::make('adia')
		]);
	}

}
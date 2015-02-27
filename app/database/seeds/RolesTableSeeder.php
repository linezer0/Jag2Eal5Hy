<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		Role::create([
			'name' => 'administrator'
		]);

		Role::create([
			'name' => 'guest' // guest = invité
		]);
	}

}
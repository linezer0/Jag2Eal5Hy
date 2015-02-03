<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SallesTableSeeder extends Seeder {

	public function run()
	{
		Salle::create([
			'id' => 1,
			'name' => 'Grand Théatre Lumière',
			'place' => 'main',
			'capacite' => '2400'
		]);

		Salle::create([
			'id' => 2,
			'name' => 'Salle Debussy',
			'place' => 'main',
			'capacite' => '1000'
		]);

		Salle::create([
			'id' => 3,
			'name' => 'Salle Bunuel',
			'place' => 'main',
			'capacite' => '500'
		]);

		Salle::create([
			'id' => 4,
			'name' => 'Salle du Soixantième',
			'place' => 'main',
			'capacite' => '1000'
		]);

		Salle::create([
			'id' => 5,
			'name' => 'Salle Bazin',
			'place' => 'main',
			'capacite' => '500'
		]);
	}
}
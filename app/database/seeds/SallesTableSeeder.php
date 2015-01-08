<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SallesTableSeeder extends Seeder {

	public function run()
	{
		Salle::create([
			'name' => 'Grand Théatre Lumière',
			'place' => 'main',
			'capacite' => '2400'
		]);

		Salle::create([
			'name' => 'Salle Debussy',
			'place' => 'main',
			'capacite' => '1000'
		]);

		Salle::create([
			'name' => 'Salle Bunuel',
			'place' => 'main',
			'capacite' => '500'
		]);

		Salle::create([
			'name' => 'Salle du Soixantième',
			'place' => 'main',
			'capacite' => '1000'
		]);

		Salle::create([
			'name' => 'Salle Bazin',
			'place' => 'main',
			'capacite' => '500'
		]);
	}
}
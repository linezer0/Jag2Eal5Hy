<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FilmsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$nationalites = ['France', 'Royaume-Uni', 'Italie', 'Etats-Unis', 'Brésil', 'Iran'];
		foreach(range(1, 40) as $index)
		{
			Film::create([
				'libelle' => $faker->name,
				'date_sortie' => $faker->dateTimeBetween('-2 years', 'now'),
				'duree' => $faker->numberBetween(120, 170),
				'nationalite' => $nationalites[array_rand($nationalites)],
				'film_categorie_id' => $faker->numberBetween(1, 6)
			]);
		}
	}

}
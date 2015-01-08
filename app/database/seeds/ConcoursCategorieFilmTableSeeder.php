<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ConcoursCategorieFilmTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 40) as $index)
		{
			ConcoursCategorieFilm::create([
				'concours_categorie_id' => $faker->numberBetween(1, 4),
				'film_id' => $index
			]);
		}
	}

}
<?php

class ConcoursCategoriesTableSeeder extends Seeder {

	public function run()
	{
		ConcoursCategorie::create([
			'libelle' => 'Long Métrage'
		]);

		ConcoursCategorie::create([
			'libelle' => 'Court Métrage'
		]);

		ConcoursCategorie::create([
			'libelle' => 'Un Certain Regard'
		]);

		ConcoursCategorie::create([
			'libelle' => 'Hors Compétition'
		]);
	}

}
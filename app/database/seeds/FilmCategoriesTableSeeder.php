<?php

class FilmCategoriesTableSeeder extends Seeder {

	public function run()
	{
		FilmCategorie::create([
			'libelle' => 'action'
		]);

		FilmCategorie::create([
			'libelle' => 'thriller'
		]);

		FilmCategorie::create([
			'libelle' => 'policier'
		]);

		FilmCategorie::create([
			'libelle' => 'comédie'
		]);

		FilmCategorie::create([
			'libelle' => 'documentaire'
		]);

		FilmCategorie::create([
			'libelle' => 'drama'
		]);
	}

}
<?php

class FilmCategoriesTableSeeder extends Seeder {

	public function run()
	{
        FilmCategorie::create([
            'libelle' => 'Action',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Drame',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Thriller',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Documentaire',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Biopic',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Science Fiction',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Fantastique',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Horreur',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Arts Martiaux',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Aventure',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Policier',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Politique',
            'created_at' => new DateTime()
        ]);

        FilmCategorie::create([
            'libelle' => 'Musical',
            'created_at' => new DateTime()
        ]);
	}

}
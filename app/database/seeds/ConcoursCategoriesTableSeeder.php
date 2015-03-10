<?php


class ConcoursCategoriesTableSeeder extends Seeder {

	public function run()
	{
        ConcoursCategorie::create([
            'libelle' => 'Compétition'
        ]);

        ConcoursCategorie::create([
            'libelle' => 'Un Certain Regard'
        ]);
	}

}
<?php

class FilmCategoriesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('film_categories')->delete();
        
		\DB::table('film_categories')->insert(array (
			0 => 
			array (
				'id' => 1,
				'libelle' => 'Action',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			1 => 
			array (
				'id' => 2,
				'libelle' => 'Drame',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			2 => 
			array (
				'id' => 3,
				'libelle' => 'Thriller',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			3 => 
			array (
				'id' => 4,
				'libelle' => 'Documentaire',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			4 => 
			array (
				'id' => 5,
				'libelle' => 'Biopic',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			5 => 
			array (
				'id' => 6,
				'libelle' => 'Science Fiction',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			6 => 
			array (
				'id' => 7,
				'libelle' => 'Fantastique',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			7 => 
			array (
				'id' => 8,
				'libelle' => 'Horreur',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			8 => 
			array (
				'id' => 9,
				'libelle' => 'Arts Martiaux',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			9 => 
			array (
				'id' => 10,
				'libelle' => 'Aventure',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			10 => 
			array (
				'id' => 11,
				'libelle' => 'Policier',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			11 => 
			array (
				'id' => 12,
				'libelle' => 'Politique',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
			12 => 
			array (
				'id' => 13,
				'libelle' => 'Musical',
				'created_at' => '2015-03-24 14:03:38',
				'updated_at' => '2015-03-24 14:03:38',
			),
		));
	}

}

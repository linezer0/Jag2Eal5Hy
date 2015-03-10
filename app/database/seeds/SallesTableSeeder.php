<?php


class SallesTableSeeder extends Seeder {

	public function run()
	{
        Salle::create([
            'nom' => 'Grand Théâtre Lumière',
            'concours_id' => ConcoursCategorie::where('libelle', '=', 'Compétition')->first()->id,
            'capacite' => 2280,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        Salle::create([
            'nom' => 'Salle Debussy',
            'concours_id' => ConcoursCategorie::where('libelle', '=', 'Un Certain Regard')->first()->id,
            'capacite' => 1000,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
	}

}
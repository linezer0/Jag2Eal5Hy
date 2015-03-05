<?php

class ProfilsTableSeeder extends Seeder {

	public function run()
	{
        Profil::create([
            'libelle' => 'participant'
        ]);

        Profil::create([
            'libelle' => 'administrator'
        ]);
	}

}
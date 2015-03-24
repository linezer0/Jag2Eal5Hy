<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ServicesTableSeeder extends Seeder {

	public function run()
	{


			Service::create([
				'libelle'=>'piscine',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()

			]);

			Service::create([
				'libelle'=>'sauna',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()

			]);

			Service::create([
				'libelle'=>'hammam',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()

			]);

			Service::create([
				'libelle'=>'internet',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()

			]);

			Service::create([
				'libelle'=>'roomservice',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()

			]);


		}


}

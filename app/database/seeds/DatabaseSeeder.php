<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('SallesTableSeeder');
		$this->call('FilmCategoriesTableSeeder');
		$this->call('FilmsTableSeeder');
		$this->call('ConcoursCategoriesTableSeeder');
		$this->call('RolesTableSeeder');
	}
}

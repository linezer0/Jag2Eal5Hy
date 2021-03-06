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

        $this->call('ProfilsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ConcoursCategoriesTableSeeder');
        $this->call('SallesTableSeeder');
        $this->call('FilmCategoriesTableSeeder');
        $this->call('ServicesTableSeeder');
    	$this->call('FilmsTableSeeder');
	}

}

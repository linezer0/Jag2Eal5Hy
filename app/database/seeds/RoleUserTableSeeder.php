<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoleUserTableSeeder extends Seeder {

	public function run()
	{
			RoleUser::create([
			'role_id' => 1,
			'user_id' => 1
			]);

			RoleUser::create([
			'role_id' => 1,
			'user_id' => 2
			]);
			RoleUser::create([
			'role_id' => 1,
			'user_id' => 3
			]);
			RoleUser::create([
			'role_id' => 1,
			'user_id' => 4
			]);
			RoleUser::create([
			'role_id' => 1,
			'user_id' => 5
			]);
		}
	}

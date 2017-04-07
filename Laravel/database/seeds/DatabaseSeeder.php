<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
	}


class CarTableSeeder extends Seeder {

	public function run()
	{
		DB::table('car')->insert([
			array('name'=>'biii', 'price'=>100000000),
			array('name'=>'Bi2', 'price'=>500000300)
			]);

		// $this->call('UserTableSeeder');
	}
}

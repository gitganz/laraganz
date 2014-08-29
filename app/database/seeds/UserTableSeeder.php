<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(

				'name' 		=>	'admin',
				'username' 	=>	'admin',
				'email' 	=>	'admin@admin.com',
				'password' 	=>	Hash::make('admin'),
			));
	}

}

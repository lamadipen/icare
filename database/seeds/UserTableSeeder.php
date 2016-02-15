<?php namespace database\seeds;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		DB::table('users')->insert(
		array(
			'name' => 'Pawan Krishna Shrestha',
			'email' => 'pawanshr@gmail.com',
			'password' => bcrypt("pawanshr"),
			'remember_token' => NULL,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime(),
		));
        DB::table('users')->insert(
            array(
                'name' => 'Shrwan Krishna Shrestha',
                'email' => 'shrwan@gmail.com',
                'password' => bcrypt("pawanshr"),
                'remember_token' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
	}

}

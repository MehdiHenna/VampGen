<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	for ($i = 0; $i < 100; $i++){

    		DB::table('users')->insert([
    			'username' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
    			'password' => bcrypt('secret'),
                   

    			]);

            DB::table('users')->insert([
                'username' => 'tsimisse',
                'email' => 'tsimisse@gmail.com',
                'passeword' => bcrypt('secret'),

                ])
    	}
    	$this->call(UsersTableSeeder::class);


    }
}

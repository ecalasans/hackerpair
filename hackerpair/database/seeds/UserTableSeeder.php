<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

    public function run(){
        DB::table('users')->truncate();

        $faker = \Faker\Factory::create();

        foreach(range(1, 10) as $index){
            User::create([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => bcrypt('$name')
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        
        for($i = 0; $i < 30 ; $i ++)
        {
                DB::table('users')->insert([
                    'name'          => $faker->firstName,
                    'username'   => $faker->userName,
                    'email'         => $faker->unique()->email,
                    'score'          => $faker->number
                ]);
        }
    }
}

<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create();

        for($i=1; $i<=10; $i++):

            User::create([
                'name'      => $faker->userName(),
                'email'     => $faker->safeEmail(),
                'password'  => bcrypt('12345678'),
            ]);

        endfor;
    }
}

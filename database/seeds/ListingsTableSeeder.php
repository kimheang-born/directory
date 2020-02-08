<?php

use Illuminate\Database\Seeder;
use App\Listing;
use Faker\Factory as Faker;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create();

        for($i=1; $i<=25; $i++):

            Listing::create([
                'title'         => $faker->sentence(),
                'description'   => $faker->text($maxNbChars = 200),
                'location'      => $faker->address(),
                'phone'         => $faker->phoneNumber(),
                'email'         => $faker->safeEmail(),
                'image'         => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]).'.jpg',
                'user_id'       => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
                'category_id'   => $faker->randomElement([1,2,3,4]),
            ]);

        endfor;
    }
}

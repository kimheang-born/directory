<?php

use App\Feature;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FeaturesTableSeeder extends Seeder
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

            Feature::create([
                'name' => $faker->name(),
                'description' => $faker->address(),
            ]);
            
        endfor;
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder
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

            Tag::create([
                'name' => $faker->company()
            ]);
            
        endfor;
    }
}

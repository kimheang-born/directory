<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Category::create([
            'title'         => 'Hotels',
        ]);

        Category::create([
            'title'         => 'Restaurants',
        ]);

        Category::create([
            'title'         => 'Fitness',
        ]);

        Category::create([
            'title'         => 'Events',
        ]);
        
    }
}

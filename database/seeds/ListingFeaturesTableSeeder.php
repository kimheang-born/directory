<?php

use App\Listing_feature;
use Illuminate\Database\Seeder;

class ListingFeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing_feature::create([
            'feature_id' => 1,
            'listing_id' => 1,
        ]);
    }
}

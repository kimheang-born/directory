<?php

use Illuminate\Database\Seeder;
use App\ListingTag;

class ListingTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=1; $i<=10; $i++):

            ListingTag::create([
                'tag_id'        => $i,
                'listing_id'    => $i,
            ]);

        endfor;
    }
}

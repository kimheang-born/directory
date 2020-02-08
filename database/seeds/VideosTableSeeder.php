<?php

use App\Video;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'listing_id'    => 1,
            'url'           => 'https://www.youtube.com/embed/tgbNymZ7vqY',
        ]);
    }
}

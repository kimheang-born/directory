<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function listings()
    {
        // return $this->hasManyThrough(Listing::class, ListingTag::class);
    }
}

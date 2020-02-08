<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'phone',
        'email',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function video()
    {
        return $this->hasOne(Video::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'listing_tags');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'listing_features');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

}


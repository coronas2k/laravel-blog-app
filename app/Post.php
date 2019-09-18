<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public static function getSortedByLatest()
    {
        return self::latest()->get();
    }
}

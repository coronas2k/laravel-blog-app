<?php

namespace App;

class Post extends Model
{
    public static function getSortedByLatest()
    {
        return self::latest()->get();
    }
    public function getHumanTime()
    {
        return $this->created_at->diffForHumans();
    }
}

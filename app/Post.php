<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    static function getSortedByLatest(){
        return self::latest()->get();
    }
    public function dateToUTC(){
        /**
         * Just a hacky thing since I manually insert data in HeidiSQL my Computer is +3
         * TODO: Remove
         */
        return $this->created_at->subHours(3)->diffForHumans();
    }
}

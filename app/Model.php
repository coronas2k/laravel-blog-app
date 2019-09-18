<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $guarded = [];

    public function getHumanTime()
    {
        return $this->created_at->diffForHumans();
    }
}

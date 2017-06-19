<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Relation to category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}

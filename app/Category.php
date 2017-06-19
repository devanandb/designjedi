<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// Get all the articles of category
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
}

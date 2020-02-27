<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    protected $guarded = [];

    public function blog(){
        return $this->hasMany(Blog::class);
    }
}

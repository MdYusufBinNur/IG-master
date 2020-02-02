<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $guarded = [];
    public function country(){
        return $this->belongsTo(Country::class);
    }
}

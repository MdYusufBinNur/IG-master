<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $guarded = [];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function program(){
        return $this->hasMany(Program::class);
    }
}

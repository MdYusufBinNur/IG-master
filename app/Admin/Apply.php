<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function university(){
        return $this->belongsTo(University::class);
    }

    public function program(){
        return $this->belongsTo(Program::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}

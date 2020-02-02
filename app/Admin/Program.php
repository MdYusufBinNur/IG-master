<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $guarded = [];

    public function university(){
        return $this->belongsTo(University::class);
    }

    public function course(){
        return $this->hasMany(Course::class);
    }
}

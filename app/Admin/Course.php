<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function program(){
        return $this->belongsToMany(Program::class);
    }
    public function application(){
        return $this->hasMany(Apply::class);
    }
    public function reqToCallback()
    {
        return $this->hasMany(ReqToCallBack::class);
    }
}

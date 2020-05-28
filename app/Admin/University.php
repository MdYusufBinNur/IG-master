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

    public function application(){
        return $this->hasMany(Apply::class);
    }
    public function reqToCallback()
    {
        return $this->hasMany(ReqToCallBack::class);
    }
}

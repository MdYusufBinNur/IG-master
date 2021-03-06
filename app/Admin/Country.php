<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function university(){
        return $this->hasMany(University::class);
    }

    public function procedure(){
        return $this->hasMany(Procedure::class);
    }

    public function story(){
        return $this->hasMany(Story::class);
    }

    public function institute(){
        return $this->hasMany(Institute::class);
    }
    public function application(){
        return $this->hasMany(Apply::class);
    }
    public function reqToCallback()
    {
        return $this->hasMany(ReqToCallBack::class);
    }

}

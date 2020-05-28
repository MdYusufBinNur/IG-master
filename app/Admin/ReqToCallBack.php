<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class ReqToCallBack extends Model
{
    protected $guarded = [];
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}

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
    public function application(){
        return $this->hasMany(Apply::class);
    }
    public function reqToCallback()
    {
        return $this->hasMany(ReqToCallBack::class);
    }

    public function parentProgram()
    {
        return $this->belongsTo(ParentProgram::class);
    }
}

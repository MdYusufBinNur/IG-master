<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class ParentProgram extends Model
{
    protected $guarded = [];

    public function program()
    {
        return $this->hasMany(Program::class,'parent_program_id');
    }


}

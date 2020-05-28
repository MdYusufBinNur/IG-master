<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class UniCategory extends Model
{
    protected $guarded = [];

    public function university()
    {
        return $this->hasMany(University::class);
    }
}

<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $guarded = [];
     public function category(){
         return $this->belongsTo(Blogcategory::class,'blogcategory_id');
     }
}

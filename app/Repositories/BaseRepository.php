<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    public function index(Model $model){
        return $model::all();
    }
}

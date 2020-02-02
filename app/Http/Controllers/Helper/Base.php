<?php


namespace App\Http\Controllers\Helper;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface Base
{
    public function index();
    public function store(Request $request);
    public function update(Request $request);
    public function delete(Model $model);
}

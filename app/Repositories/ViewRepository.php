<?php


namespace App\Repositories;


use App\Admin\Country;
use App\Http\Controllers\Common;

class ViewRepository extends Common
{
    public function home_blade(){
        return Country::with('university.program.course')->get();
    }
}

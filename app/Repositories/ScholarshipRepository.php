<?php


namespace App\Repositories;


use App\Admin\Scholarship;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ScholarshipRepository implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Scholarship::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
    }

    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

    public function delete(Model $model)
    {
        // TODO: Implement delete() method.
    }
}

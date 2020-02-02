<?php


namespace App\Repositories;


use App\Admin\Service;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ServiceRepository implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Service::all();
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

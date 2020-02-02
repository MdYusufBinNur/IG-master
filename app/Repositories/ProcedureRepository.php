<?php


namespace App\Repositories;


use App\Admin\Procedure;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProcedureRepository implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Procedure::all();
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

<?php


namespace App\Repositories;


use App\Admin\ReqToCallBack;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ReqToCallBackRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return ReqToCallBack::all();
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
    public function show(Model $model){
        return ReqToCallBack::with('country','course')->where('id','=',$model->id)->first();
    }
}

<?php


namespace App\Repositories;


use App\Admin\ParentProgram;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ParentProgramRepo extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.

        return ParentProgram::all();
    }

    public function store(Request $request)
    {

        $data['name'] =  $request->name;

        if (!empty($request->program_id)){
            $isAvailable = ParentProgram::find($request->program_id);

            if (!empty($isAvailable)){

                $isAvailable->update($data);
                return 'success';
            }
        }
        else{
            ParentProgram::firstOrCreate($data);
            return 'success';
        }

        return  'error';
    }

    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

    public function delete(Model $model)
    {
        // TODO: Implement delete() method.
        $isAvailable = ParentProgram::find($model->id);


        if ($isAvailable)
        {
            if ($isAvailable->delete())
            {
                return 'success';
            }
        }
        return  'error';
    }

    public function show(Model $model){
        return ParentProgram::find($model->id);

    }
}

<?php


namespace App\Repositories;


use App\Admin\Procedure;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProcedureRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        $procedures = Procedure::all();
        $countries = $this->all_countries();
        return compact('countries','procedures');
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $data['country_id'] =  $request->country_id;
        $data['description'] =  $request->description;

        if (!empty($request->procedure_id)){
            $isAvailable = Procedure::find($request->procedure_id);

            if (!empty($isAvailable)){
                if (empty($request->country_id))
                {
                    $data['country_id'] =  $isAvailable->country_id;
                }
                $isAvailable->update($data);
                return 'success';
            }

        }
        else{
            Procedure::create($data);
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
        $isAvailable = Procedure::findOrFail($model->id);

        $result = Procedure::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }

    public function show(Model $model){
        return Procedure::with('country')->where('id','=', $model->id)->first();
    }
}

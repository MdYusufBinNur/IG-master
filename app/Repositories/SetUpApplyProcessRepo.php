<?php


namespace App\Repositories;


use App\Admin\SetUpApplyProcess;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SetUpApplyProcessRepo extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return SetUpApplyProcess::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.


        $data['apply_details'] =  $request->apply_details;

        if (!empty($request->process_id)){
            $isAvailable = SetUpApplyProcess::find($request->process_id);

            if (!empty($isAvailable)){//return $isAvailable->country_image;

                $isAvailable->update($data);
                return 'success';
            }
        }
        else{
            if (SetUpApplyProcess::create($data))
            {
                return 'success';
            }
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
        $isAvailable = SetUpApplyProcess::find($model->id);

        if ($isAvailable)
        {
            if ($isAvailable->delete())
            {
                return 'success';
            }
        }
        return  'error';
    }
}

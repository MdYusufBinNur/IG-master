<?php


namespace App\Repositories;


use App\Admin\UniCategory;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UniCategoryRepository extends Common implements Base
{
    public function index()
    {
        return UniCategory::all();
        // TODO: Implement index() method.
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $data['name'] = $request->category_name;
        if (!empty($request->category_id)){
            $isAvailable = UniCategory::find($request->category_id);
            if ($isAvailable){
                $isAvailable->update($data);
                return 'success';
            }else{
                return 'error';
            }
        }else{
            if (UniCategory::create($data)){
                return 'success';
            }else{
                return 'error';
            }
        }
    }

    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

    public function delete(Model $model)
    {
        // TODO: Implement delete() method.
        $isAvailable = UniCategory::find($model->id);
        if ($isAvailable){
            $isAvailable->delete();
        }
        return;

    }
}

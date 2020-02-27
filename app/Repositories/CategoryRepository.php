<?php


namespace App\Repositories;


use App\Admin\Blogcategory;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryRepository extends Common implements Base
{

    public function index()
    {
        return Blogcategory::all();
        // TODO: Implement index() method.
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        if (!empty($request->category_id)){
            $isAvailable = Blogcategory::find($request->category_id);
            if ($isAvailable){
                $isAvailable->update($data);
                return 'success';
            }else{
                return 'error';
            }
        }else{
            if (Blogcategory::create($data)){
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
        $isAvailable = Blogcategory::find($model->id);
        if ($isAvailable){
            $isAvailable->delete();
        }
        return;

    }
}

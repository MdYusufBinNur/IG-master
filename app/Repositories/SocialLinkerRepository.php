<?php


namespace App\Repositories;


use App\Admin\Linker;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SocialLinkerRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Linker::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $image = "";
        $dir = "Social_Image";
        if (!empty($request->file('social_icon'))){
            $image =  $this->save_file($request->file('social_icon'), $dir);
        }

        $data['name'] =  $request->name;
        $data['social_link'] =  $request->social_link;
        $data['social_icon'] =  $image;

        if (!empty($request->social_linker_id)){
            $isAvailable = Linker::find($request->social_linker_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['social_icon'] = $isAvailable->social_icon;
                }
                else{
                    File::delete($isAvailable->social_icon);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Linker::create($data);
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
        $isAvailable = Linker::findOrFail($model->id);
        if ($isAvailable){
            File::delete($isAvailable->social_icon);
        }
        $result = Linker::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }
}

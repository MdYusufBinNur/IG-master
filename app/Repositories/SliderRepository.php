<?php


namespace App\Repositories;


use App\Admin\Slider;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Slider::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $image = "";
        $dir = "Slider_Image";
        if (!empty($request->file('slider_image'))){
            $image =  $this->save_file($request->file('slider_image'), $dir);
        }

        $data['slider_name'] =  $request->slider_name;

        $data['slider_image'] =  $image;

        if (!empty($request->slider_id)){
            $isAvailable = Slider::find($request->slider_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['slider_image'] = $isAvailable->slider_image;
                }
                else{
                    File::delete($isAvailable->slider_image);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Slider::create($data);
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
        $isAvailable = Slider::findOrFail($model->id);
        if ($isAvailable){
            File::delete($isAvailable->social_icon);
        }
        $result = Slider::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }
}

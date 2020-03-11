<?php


namespace App\Repositories;


use App\Admin\Service;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Service::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $image = "";
        $dir = "Service_Image";
        if (!empty($request->file('service_image'))){
            $image =  $this->save_file($request->file('service_image'), $dir);
        }

        $data['service_title'] =  $request->service_title;
        $data['service_description'] =  $request->service_description;
        $data['service_image'] =  $image;

        if (!empty($request->service_id)){
            $isAvailable = Service::find($request->service_id);

            if (!empty($isAvailable))web{
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['service_image'] = $isAvailable->service_image;
                }
                else{
                    File::delete($isAvailable->service_image);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Service::create($data);
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
        $isAvailable = Service::findOrFail($model->id);
        if ($isAvailable){
            File::delete($isAvailable->service_image);
        }
        $result = Service::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }
}

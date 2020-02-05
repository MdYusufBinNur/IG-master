<?php


namespace App\Repositories;


use App\Admin\Institute;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InstituteRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Institute::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.

        $image = "";
        $dir = "Institute_Image";
        if (!empty($request->file('institute_image'))){
            $image =  $this->save_file($request->file('institute_image'), $dir);
        }

        $data['institute_name'] =  $request->institute_name;

        $data['institute_image'] =  $image;

        if (!empty($request->institute_id)){
            $isAvailable = Institute::find($request->institute_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['institute_image'] = $isAvailable->institute_image;
                }
                else{
                    File::delete($isAvailable->institute_image);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Institute::create($data);
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
        $isAvailable = Institute::findOrFail($model->id);
        if ($isAvailable){
            File::delete($isAvailable->institute_image);
        }
        $result = Institute::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }
}

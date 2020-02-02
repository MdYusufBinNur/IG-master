<?php


namespace App\Repositories;


use App\Admin\Scholarship;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ScholarshipRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.

        return Scholarship::all();

    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $image = "";
        $dir = "Scholarship_Image";
        if (!empty($request->file('scholarship_image'))){
            $image =  $this->save_file($request->file('scholarship_image'), $dir);
        }

        $data['scholarship_title'] =  $request->scholarship_title;
        $data['scholarship_description'] =  $request->scholarship_description;
        $data['scholarship_image'] =  $image;

        if (!empty($request->scholarship_id)){
            $isAvailable = Scholarship::find($request->scholarship_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['scholarship_image'] = $isAvailable->scholarship_image;
                }
                else{
                    File::delete($isAvailable->scholarship_image);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Scholarship::create($data);
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
        $isAvailable = Scholarship::findOrFail($model->id);
        if ($isAvailable){
            File::delete($isAvailable->scholarship_image);
        }
        $result = Scholarship::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }


}

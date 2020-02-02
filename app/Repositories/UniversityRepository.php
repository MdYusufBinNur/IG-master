<?php


namespace App\Repositories;


use App\Admin\Country;
use App\Admin\University;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UniversityRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        $universities = University::all();
        $countries = $this->all_countries();
        return compact('universities', 'countries');
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $image = "";
        $dir = "University_Image";
        if (!empty($request->file('university_image'))){
            $image =  $this->save_file($request->file('university_image'), $dir);
        }


        $data['country_id'] =  $request->country_id;
        $data['university_name'] =  $request->university_name;
        $data['university_description'] =  $request->university_description;
        $data['university_link'] =  $request->university_link;
        $data['university_image'] =  $image;

        if (!empty($request->university_id)){
            $isAvailable = University::find($request->university_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['university_image'] = $isAvailable->university_image;
                }
                else{
                    File::delete($isAvailable->university_image);
                }
                if (empty($request->country_id))
                {
                    $data['country_id'] =  $isAvailable->country_id;
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{
            University::create($data);
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
        $isAvailable = University::findOrFail($model->id);
        if ($isAvailable){
            File::delete($isAvailable->university_image);
        }
        $result = University::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }

    }

    public function show(Model $model){
        return University::with('country')->where('id','=', $model->id)->first();
    }

}

<?php


namespace App\Repositories;

use App\Admin\Country;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CountryRepository extends Common implements Base
{

    public function index()
    {
        return Country::all();
        // TODO: Implement index() method.
    }

    public function store(Request $request)
    {
        $image = "";
        $dir = "Country_Image";
        if (!empty($request->file('country_image'))){
            $image =  $this->save_file($request->file('country_image'), $dir);
        }

        $data['country_name'] =  $request->country_name;
        $data['at_a_glance'] =  $request->at_a_glance;
        $data['country_image'] =  $image;

        if (!empty($request->country_id)){
            $isAvailable = Country::find($request->country_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['country_image'] = $isAvailable->country_image;
                }
                else{
                    File::delete($isAvailable->country_image);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Country::create($data);
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
        $isAvailable = Country::findOrFail($model->id);
        if ($isAvailable){
            File::delete($isAvailable->country_image);
        }
        $result = Country::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }
}

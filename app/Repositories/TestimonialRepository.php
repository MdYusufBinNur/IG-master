<?php


namespace App\Repositories;


use App\Admin\Testimonial;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Testimonial::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $image = "";
        $dir = "Testimonial_Image";
        if (!empty($request->file('testimonial_image'))){
            $image =  $this->save_file($request->file('testimonial_image'), $dir);
        }

        $data['testimonial_title'] =  $request->testimonial_title;
        $data['testimonial_description'] =  $request->testimonial_description;
        $data['testimonial_image'] =  $image;

        if (!empty($request->testimonial_id)){
            $isAvailable = Testimonial::find($request->testimonial_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['testimonial_image'] = $isAvailable->testimonial_image;
                }
                else{
                    File::delete($isAvailable->testimonial_image);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Testimonial::create($data);
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
        $isAvailable = Testimonial::findOrFail($model->id);

        if ($isAvailable){
            File::delete($isAvailable->country_image);
        }

        $result = Testimonial::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }
        return 'error';
    }
}

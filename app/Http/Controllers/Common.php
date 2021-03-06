<?php


namespace App\Http\Controllers;


use App\Admin\Country;
use App\Admin\Course;
use App\Admin\Program;
use App\Admin\University;
use Gate;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Common
{
    public function check_user_role($user_role){
        if (!Gate::allows($user_role)){
            abort(404,'Sorry No Page Available');
        }
    }

    public function save_file($image, String $directory)
    {
        $path = 'image/'.$directory;
        if(!File::exists($path)) {
            File::makeDirectory($path,false, false);
        }

        $fileType    = $image->getClientOriginalExtension();
        $imageName   = rand().'.'.$fileType;
        $path_info = pathinfo($imageName, PATHINFO_EXTENSION);
        $directory   = $path."/";
        if ($path_info == 'pdf' || $path_info ==  'docx')
        {
            $imageUrl   = $directory.$imageName;

            $image->move($directory,$imageName);
        }
        else if ( $path_info == "png" || $path_info == 'jpeg' || $path_info == "jpg" ){
            $imageUrl    = $directory.$imageName;
            Image::make($image)->save($imageUrl);
        }
        else{
            $imageUrl = "No Valid File";
        }

        return $imageUrl;
    }

    public function returnBack($message){
        if ($message == 'success'){
            return back()->with('success','Successfully Stored');
        }else{
            return back()->with('error','Failed To Store Data !!');
        }
    }

    public function send_notification($message, $alert_type){
        return back()->with(array(
            'message' => $message,
            'alert-type' => $alert_type
        ));
    }

    public function all_countries(){
        return Country::all();
    }

    public function all_universities(){
        return University::all();
    }

    public function all_programs(){
        return Program::all();
    }

    public function all_courses(){
        return Course::all();
    }

    public function find_university($id){
        return University::where('country_id',$id)->get();
    }
    public function find_program($id){
        return Program::where('university_id',$id)->get();
    }
}

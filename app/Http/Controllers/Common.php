<?php


namespace App\Http\Controllers;


use App\Admin\Country;
use App\Admin\Course;
use App\Admin\Program;
use App\Admin\University;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Common
{
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
            $imageUrl = "";
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
}

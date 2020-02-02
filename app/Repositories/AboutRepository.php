<?php


namespace App\Repositories;


use App\Admin\About;
use Illuminate\Support\Facades\File;


class AboutRepository
{
    public function index(){
        $base = new BaseRepository();
        return $base->index(new About());
    }

    public function store($request)
    {
        $result = About::create($request);
        if ($result){
            return 'success';
        }else{
           return  'error';
        }
    }

    public function update($param)
    {
       $isAvailable = About::findOrFail($param['about_id']);
       if (!empty($param['about_image'])){
           File::delete($isAvailable->about_image);
           $image = $param['about_image'];
       }
       else{
           $image = $isAvailable->about_image;
       }
       $data['about_description'] = $param['about_description'];
       $data['about_title'] = $param['about_title'];
       $data['about_mission'] = $param['about_mission'];
       $data['about_vision'] = $param['about_vision'];
       $data['about_image'] = $image;

        $result = About::find($param['about_id'])->update($data);
        if ($result){
            return 'success';
        }else{
            return  'error';
        }

    }

    public function destroy($about)
    {
        $isAvailable = About::findOrFail($about->id);
        if ($isAvailable){
            File::delete($isAvailable->about_image);
        }
        $result = About::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }
}

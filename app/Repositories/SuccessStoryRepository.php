<?php


namespace App\Repositories;


use App\Admin\Story;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SuccessStoryRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        $countries = $this->all_countries();
        $stories = Story::all();
        return compact('countries', 'stories');
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $image = "";
        $dir = "Story_Image";
        if (!empty($request->file('story_image'))){
            $image =  $this->save_file($request->file('story_image'), $dir);
        }
        $data['country_id'] =  $request->country_id;
        $data['description'] =  $request->description;
        $data['title'] =  $request->title;
        $data['source'] =  $request->source;
        $data['story_image'] =  $image;

        if (!empty($request->success_story_id)){
            $isAvailable = Story::find($request->success_story_id);

            if (!empty($isAvailable)){
                if (empty($request->country_id))
                {
                    $data['country_id'] =  $isAvailable->country_id;
                }

                if (empty($image)){
                    $data['story_image'] = $isAvailable->story_image;
                }
                else{
                    File::delete($isAvailable->story_image);
                }
                $isAvailable->update($data);
                return 'success';
            }

        }
        else{
            Story::create($data);
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
        $isAvailable = Story::findOrFail($model->id);
        if ($isAvailable){
            File::delete($isAvailable->story_image);
        }
        $result = Story::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }

    public function show(Story $story)
    {
        return Story::with('country')->where('id','=',$story->id)->first();
    }
}

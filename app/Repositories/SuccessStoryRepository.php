<?php


namespace App\Repositories;


use App\Admin\Story;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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
        $data['country_id'] =  $request->country_id;
        $data['description'] =  $request->description;
        $data['title'] =  $request->title;
        $data['source'] =  $request->source;

        if (!empty($request->success_story_id)){
            $isAvailable = Story::find($request->success_story_id);

            if (!empty($isAvailable)){
                if (empty($request->country_id))
                {
                    $data['country_id'] =  $isAvailable->country_id;
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

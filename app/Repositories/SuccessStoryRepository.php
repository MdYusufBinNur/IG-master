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
    }

    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

    public function delete(Model $model)
    {
        // TODO: Implement delete() method.
    }
}

<?php


namespace App\Repositories;


use App\Admin\Blog;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Blog::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.

        $image = "";
        $dir = "Blog_Image";
        if (!empty($request->file('blog_image'))){
            $image =  $this->save_file($request->file('blog_image'), $dir);
        }

        $data['blog_title'] =  $request->blog_title;
        $data['blog_description'] =  $request->blog_description;
        $data['blog_image'] =  $image;

        if (!empty($request->blog_id)){
            $isAvailable = Blog::find($request->blog_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['blog_image'] = $isAvailable->blog_image;
                }
                else{
                    File::delete($isAvailable->blog_image);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Blog::create($data);
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
        $isAvailable = Blog::findOrFail($model->id);

        if ($isAvailable){
            File::delete($isAvailable->country_image);
        }

        $result = Blog::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }
        return 'error';
    }
}

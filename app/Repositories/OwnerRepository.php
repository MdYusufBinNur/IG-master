<?php


namespace App\Repositories;


use App\Admin\Owner;
use App\Admin\Ownerinfo;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OwnerRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        return Owner::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.

        $image = "";
        $dir = "Owner_Image";
        if (!empty($request->file('owner_image'))){
            $image =  $this->save_file($request->file('owner_image'), $dir);
        }

        $data['owner_name'] =  $request->owner_name;
        $data['owner_message'] =  $request->owner_message;
        $data['owner_image'] =  $image;

        if (!empty($request->owner_id)){
            $isAvailable = Owner::find($request->owner_id);

            if (!empty($isAvailable)){
                //return $isAvailable->country_image;
                if (empty($image)){
                    $data['owner_image'] = $isAvailable->owner_image;
                }
                else{
                    File::delete($isAvailable->owner_image);
                }

                $isAvailable->update($data);
                return 'success';
            }

        }
        else{

            Owner::create($data);
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
        $isAvailable = Owner::findOrFail($model->id);

        if ($isAvailable){
            File::delete($isAvailable->country_image);
        }

        $result = Owner::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }
        return 'error';
    }
}

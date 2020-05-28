<?php


namespace App\Repositories;


use App\Admin\Course;
use App\Admin\Program;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseRepository extends Common implements Base
{


    public function index()
    {
        // TODO: Implement index() method.
        $programs = Program::all();
        $courses =  Course::all();
        return compact('programs', 'courses');
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        $data['program_id'] =  $request->program_id;
        $data['course_name'] =  $request->course_name;
        $data['course_fee'] =  $request->course_fee;
        $data['course_duration'] =  $request->course_duration;
        $data['course_full_name'] =  $request->course_full_name;
        $data['intake'] =  $request->intake;
        $data['course_details'] =  $request->course_details;

        if (!empty($request->course_id)){
            $isAvailable = Course::find($request->course_id);

            if (!empty($isAvailable)){
                if (empty($request->program_id))
                {
                    $data['program_id'] =  $isAvailable->program_id;
                }
                $isAvailable->update($data);
                return 'success';
            }
        }
        else{
            Course::create($data);
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
        $isAvailable = Course::findOrFail($model->id);

        $result = Course::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }

    public function show(Model $model){

        return DB::table('courses')->select('courses.*','programs.*')
            ->leftJoin('programs','courses.program_id','=','programs.id')
            ->where('courses.id','=',$model->id)
            ->first();
       // return Course::with('programs')->where('id','=', $model->id)->first();
    }
}

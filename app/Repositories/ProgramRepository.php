<?php


namespace App\Repositories;


use App\Admin\ParentProgram;
use App\Admin\Program;
use App\Admin\University;
use App\Http\Controllers\Common;
use App\Http\Controllers\Helper\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProgramRepository extends Common implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        $universities = University::all();
        $programs = Program::all();
        $parent_programs = ParentProgram::all();
        return compact('universities', 'programs','parent_programs');
    }

    public function store(Request $request)
    {

        $data['program_name'] =  "";
        $parent_programs = ParentProgram::find($request->parent_program_id);
        if ($parent_programs)
        {
            $program_name = $parent_programs->name;
            $data['program_name'] =  $program_name;
        }
        $data['university_id'] =  $request->university_id;

        $data['parent_program_id'] =  $request->parent_program_id;

        if (!empty($request->program_id)){
            $isAvailable = Program::find($request->program_id);

            if (!empty($isAvailable)){
                if (empty($request->university_id))
                {
                    $data['university_id'] =  $isAvailable->university_id;
                }if (empty($request->parent_program_id))
                {
                    $data['parent_program_id'] =  $isAvailable->parent_program_id;
                }
                $isAvailable->update($data);
                return 'success';
            }

        }
        else{
            Program::create($data);
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
        $isAvailable = Program::findOrFail($model->id);

        $result = Program::find($isAvailable->id)->delete();

        if ($result){
            return 'success';
        }else{
            return  'error';
        }
    }

    public function show(Model $model){
        return Program::with('university')->where('id', '=',  $model->id)->first();

    }
}

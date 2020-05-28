<?php

namespace App\Http\Controllers\Admin;

use App\Admin\ParentProgram;
use App\Admin\Program;
use App\Http\Controllers\Controller;
use App\Repositories\ProgramRepository;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public $programRepository;
    public function __construct(ProgramRepository $programRepository)
    {
        $this->programRepository = $programRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $results = $this->programRepository->index();
        $programs = $results['programs'];
        $universities = $results['universities'];
        $parent_programs = ParentProgram::all();
        $countries = $this->programRepository->all_countries();
        return view('Admin.Program.program_list', compact('programs','universities','countries','parent_programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
       $countries = $this->programRepository->all_countries();
        $parent_programs = ParentProgram::all();

        return view('Admin.Program.program', compact('countries','parent_programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $result = $this->programRepository->store($request);
        return  $this->programRepository->returnBack($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Program  $program
     * @return Program|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function show(Program $program)
    {
        return $this->programRepository->show($program);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Program  $program
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Program $program)
    {
         $this->programRepository->delete($program);

    }
}

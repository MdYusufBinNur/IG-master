<?php

namespace App\Http\Controllers\Admin;

use App\Admin\ParentProgram;
use App\Http\Controllers\Controller;
use App\Repositories\ParentProgramRepo;
use Illuminate\Http\Request;

class ParentProgramController extends Controller
{

    public $repo;
    public function __construct(ParentProgramRepo $repo)
    {
        return $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $parent_programs = $this->repo->index();
        //return $parent_programs;
        return view('Admin.Program.parent_program_list',compact('parent_programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.Program.parent_program');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //return  $request;
        return  $this->repo->returnBack($this->repo->store($request));
    }


    public function show(ParentProgram $program)
    {
        return $program;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(ParentProgram $program)
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
    public function update(Request $request, ParentProgram $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Program  $program
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ParentProgram $program)
    {
        $this->repo->delete($program);

    }
}

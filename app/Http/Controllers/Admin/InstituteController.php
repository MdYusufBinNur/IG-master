<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Institute;
use App\Http\Controllers\Controller;
use App\Repositories\InstituteRepository;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public $instituteRepository;

    public function __construct(InstituteRepository $instituteRepository)
    {
        $this->instituteRepository = $instituteRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $institutes =  $this->instituteRepository->index();
        return view('Admin.Institute.institute_list', compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.Institute.institute');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $result = $this->instituteRepository->store($request);
        return $this->instituteRepository->returnBack($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Institute  $institute
     * @return Institute
     */
    public function show(Institute $institute)
    {
        return $institute;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institute $institute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institute $institute)
    {
        $this->instituteRepository->delete($institute);
    }
}

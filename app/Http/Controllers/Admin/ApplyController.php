<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Apply;
use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public $applyRepository;

    public function __construct(ApplyRepository $applyRepository)
    {
        $this->applyRepository = $applyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $applicants = $this->applyRepository->index();
        return view('Admin.Apply.apply_list', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Apply  $apply
     * @return Apply
     */
    public function show(Apply $apply)
    {
        return $apply;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function edit(Apply $apply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apply $apply)
    {
        //
    }
}

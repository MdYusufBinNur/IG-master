<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Scholarship;
use App\Http\Controllers\Controller;
use App\Repositories\ScholarshipRepository;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public $scholarshipRepo;

    public function __construct(ScholarshipRepository $scholarshipRepo)
    {
        $this->scholarshipRepo = $scholarshipRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $scholarships = $this->scholarshipRepo->index();
        return view('Admin.Scholarship.scholarship_list', compact('scholarships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $countries = $this->scholarshipRepo->all_countries();
        return view('Admin.Scholarship.scholarship',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $result = $this->scholarshipRepo->store($request);
        return $this->scholarshipRepo->returnBack($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Scholarship  $scholarship
     * @return Scholarship|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function show(Scholarship $scholarship)
    {
        return $scholarship;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function edit(Scholarship $scholarship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scholarship $scholarship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scholarship $scholarship)
    {
        $this->scholarshipRepo->delete($scholarship);
    }
}

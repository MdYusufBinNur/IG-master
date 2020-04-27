<?php

namespace App\Http\Controllers\Admin;

use App\Admin\University;
use App\Http\Controllers\Controller;
use App\Repositories\UniversityRepository;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public $universityRepository;
    public function __construct(UniversityRepository $universityRepository)
    {
        $this->universityRepository = $universityRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $universities = $this->universityRepository->index();
        $countries = $universities['countries'];
        $universities = $universities['universities'];
        return view('Admin.University.university_list', compact('universities', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $countries = $this->universityRepository->all_countries();
        return view('Admin.University.university', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //return $request;
        $result = $this->universityRepository->store($request);
        return $this->universityRepository->returnBack($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\University  $university
     * @return University|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function show(University $university)
    {
        return $this->universityRepository->show($university);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        $this->universityRepository->delete($university);
    }

    public function find_university($id){
        return $this->universityRepository->find_university($id);
    }
    public function find_program($id){
        return $this->universityRepository->find_program($id);
    }
}

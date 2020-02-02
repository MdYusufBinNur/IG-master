<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Country;
use App\Http\Controllers\Common;
use App\Http\Controllers\Controller;
use App\Repositories\CountryRepository;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public $countryRepository, $commonClass;

    public function __construct(CountryRepository $countryRepository, Common $common)
    {
         $this->countryRepository = $countryRepository;
         $this->commonClass = $common;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $countries = $this->countryRepository->index();
        return view('Admin.Country.country_list', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view("Admin.Country.country");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $countries =   $this->countryRepository->store($request);

       return $this->countryRepository->returnBack($countries);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return $country;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Country  $country
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Country $country)
    {
        // TODO: Implement delete() method.
         $this->countryRepository->delete($country);

    }
}

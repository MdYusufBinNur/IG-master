<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Linker;
use App\Http\Controllers\Controller;

use App\Repositories\SocialLinkerRepository;
use Illuminate\Http\Request;

class LinkerController extends Controller
{
    public $socialLinkerRepository;
    public function __construct(SocialLinkerRepository $socialLinkerRepository)
    {
        $this->socialLinkerRepository = $socialLinkerRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $socialLinkers = $this->socialLinkerRepository->index();

        return view('Admin.SocialLinker.linker_list', compact('socialLinkers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.SocialLinker.socialLinker');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $result = $this->socialLinkerRepository->store($request);
        return $this->socialLinkerRepository->returnBack($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Linker  $linker
     * @return Linker
     */
    public function show(Linker $linker)
    {
        return $linker;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Linker  $linker
     * @return \Illuminate\Http\Response
     */
    public function edit(Linker $linker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Linker  $linker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linker $linker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Linker  $linker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linker $linker)
    {
        $this->socialLinkerRepository->delete($linker);
    }
}

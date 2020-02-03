<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Story;
use App\Http\Controllers\Controller;
use App\Repositories\SuccessStoryRepository;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public $successStoryRepository;
    public function __construct(SuccessStoryRepository $successStoryRepository)
    {
        $this->successStoryRepository = $successStoryRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $results = $this->successStoryRepository->index();
        $countries = $results['countries'];
        $stories = $results['stories'];
        return view('Admin.SuccessStory.success_story_list', compact('stories','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $countries = $this->successStoryRepository->all_countries();

        return view('Admin.SuccessStory.success_story', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $result = $this->successStoryRepository->store($request);
        return $this->successStoryRepository->returnBack($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Story  $story
     * @return Story
     */
    public function show(Story $story)
    {
        return  $this->successStoryRepository->show($story);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        $this->successStoryRepository->delete($story);
    }
}

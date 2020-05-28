<?php

namespace App\Http\Controllers\Admin;

use App\Admin\UniCategory;
use App\Http\Controllers\Controller;
use App\Repositories\UniCategoryRepository;
use Illuminate\Http\Request;

class UniCategoryController extends Controller
{
    public $categoryRepository;
    public function __construct(UniCategoryRepository $categoryRepository)
    {
        $this->categoryRepository=$categoryRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = $this->categoryRepository->index();
        return  view('Admin.University.uni_category_list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.University.uni_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($this->categoryRepository->store($request) == 'success'){
            return $this->categoryRepository->send_notification('Successfully stored','success');
        }
        return $this->categoryRepository->send_notification('Something went wrong','error');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\UniCategory  $uni_category
     * @return UniCategory
     */
    public function show(UniCategory $uni_category)
    {
        return  $uni_category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(UniCategory $uni_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UniCategory $blogcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Blogcategory  $uni_category
     * @return void
     */
    public function destroy(UniCategory $uni_category)
    {
        return $this->categoryRepository->delete($uni_category);
    }
}

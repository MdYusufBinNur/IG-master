<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Blogcategory;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class BlogcategoryController extends Controller
{
    public $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
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
        return  view('Admin.Category.category_list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.Category.category');
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
     * @param  \App\Admin\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Blogcategory $blogcategory)
    {
        return  $blogcategory;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogcategory $blogcategory)
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
    public function update(Request $request, Blogcategory $blogcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Blogcategory  $blogcategory
     * @return void
     */
    public function destroy(Blogcategory $blogcategory)
    {
        return $this->categoryRepository->delete($blogcategory);
    }
}

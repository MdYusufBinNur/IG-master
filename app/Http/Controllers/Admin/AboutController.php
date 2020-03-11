<?php

namespace App\Http\Controllers\Admin;

use App\Admin\About;
use App\Http\Controllers\Common;
use App\Http\Controllers\Controller;
use App\Repositories\AboutRepository;
use Illuminate\Http\Request;
use function Sodium\add;

class AboutController extends Controller
{

    public $aboutRepository, $commonClass;

    public function __construct(AboutRepository $aboutRepository, Common $commonClass)
    {
        $this->aboutRepository = $aboutRepository;
        $this->commonClass = $commonClass;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

            $abouts =  $this->aboutRepository->index();
            // return $abouts;
            return view('Admin.About.about_list', compact('abouts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.About.about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {

        //return $request;
        //return $request;
        $image = "";
        $dir = "About_Image";
        if ($request->file('about_image')){
            $image =  $this->commonClass->save_file($request->file('about_image'), $dir);
        }


        $param = array();
        $param['about_title'] = $request->get('about_title');
        $param['about_description'] = $request->get('about_description');
        $param['about_mission'] = $request->get('about_mission');
        $param['about_vision'] = $request->get('about_vision');
        $param['about_image'] = $image;

        if ($request->about_id){
            $param['about_id'] = $request->get('about_id');
            $output = $this->aboutRepository->update($param);
        }else{
            $output = $this->aboutRepository->store($param);
        }

        if ($output == 'success'){
            return back()->with('success','Successfully Stored');
        }else{
            return back()->with('error','Failed To Store Data !!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return $about;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
         $this->aboutRepository->destroy($about);
    }
}

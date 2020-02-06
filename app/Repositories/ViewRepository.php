<?php


namespace App\Repositories;


use App\Admin\About;
use App\Admin\Blog;
use App\Admin\Country;
use App\Admin\Course;
use App\Admin\Institute;
use App\Admin\Linker;
use App\Admin\Owner;
use App\Admin\Program;
use App\Admin\Service;
use App\Admin\Slider;
use App\Admin\Testimonial;
use App\Admin\University;
use App\Http\Controllers\Common;

class ViewRepository extends Common
{
    public function home_blade(){

        $countries = $this->all_countries();
        $institutes = $this->institute();
        $sliders = $this->sliders();
        $testimonials = $this->testimonials();
        $blogs = $this->blogs();
        $linkers = $this->linkers();
        $services = $this->services();
        $about =  $this->about();
        $owner =  $this->owner();
        return compact('countries','institutes','sliders','testimonials','blogs','linkers','services','about','owner');

    }

    public function country_list(){

        return Country::all();
    }

    public function university_list($country_id){
        return University::where('country_id','=', $country_id)->get();
    }

    public function program_list($university_id){
        return Program::where('university_id',$university_id)->get();
    }

    public function course_list($id){
        return Course::where('program_id',$id)->get();
    }

    public function sliders()
    {
        return Slider::orderBy('id', 'desc')->get();
    }

    public function testimonials(){
        return Testimonial::orderBy('id','DESC')
            ->skip(0)
            ->take(2)
            ->get();
    }

    public function blogs(){
        return Blog::orderBy('id','DESC')
            ->skip(0)
            ->take(4)
            ->get();
    }

    public function linkers(){
        return Linker::all();
    }

    public function country_institute(){
       return Country::with('university')->get();


    }

    public function services(){
        return Service::orderBy('id','desc')->get();
    }

    public function about(){
        return About::orderBy('id','desc')->first();
    }

    public function owner(){
        return Owner::orderBy('id','desc')->first();
    }

    public function course_details( $request){
        //return $request['find_course'];
        return Course::with('program.university.country')->where('id', $request['find_course'])->first();
    }

    public function institute(){
        return Institute::with('country')->get();
    }

    public function blog_details($id){
        return Blog::where('id',$id)->first();
    }

    public function view_all_blogs(){

        $blogs = Blog::orderBy('id','ASC')->limit(3)->get();
        $max_blog_id = "";
        foreach ($blogs as $blog){
            $max_blog_id = $blog->id;
        }
        return compact('max_blog_id', 'blogs');
    }

    public function load_more_blog($id){
        $blogs = Blog::where('id', '>', $id)->limit(3)->get();
        $max_blog_id = "";
        foreach ($blogs as $blog){
            $max_blog_id = $blog->id;
        }
        return compact('blogs','max_blog_id');
    }

    public function success_story()
    {
        return Country::with('story')->get();
    }
}

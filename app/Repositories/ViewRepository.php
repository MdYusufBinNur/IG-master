<?php


namespace App\Repositories;

use App\Admin\About;
use App\Admin\Apply;
use App\Admin\Blog;
use App\Admin\Blogcategory;
use App\Admin\Contact;
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
use Illuminate\Http\Request;

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

    public function load_categorized_blog($id){
        $blogs = Blog::where('blogcategory_id', '=', $id)->limit(12)->get();
        $max_blog_id = "";
        foreach ($blogs as $blog){
            $max_blog_id = $blog->id;
        }
        return compact('blogs','max_blog_id');
    }

    public function load_more_categorized_blog($id,$max_id){
        $blogs = Blog::where('blogcategory_id', '=', $id)->where('id','>',$max_id)->limit(9)->get();
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

    public function country_details($id){
        return Country::with('procedure','story')->where('id','=',$id)->first();
    }

    public function save_apply(Request $request){

        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['ielts_points'] = $request->ielts_points;
        $data['country_id'] = $request->country;
        $data['university_id'] = $request->university;
        $data['program_id'] = $request->program;
        $data['course_id'] = $request->course;
        $data['mobile'] = $request->mobile;
        $data['qualification'] = $request->qualification;
        $data['comments'] = $request->comments;
        $data['applicant_files'] = json_encode($request->applicant_files);


        if (Apply::create($data)){

           return 'success';
        }
        else{
            return 'error';
        }
    }

    public function send_message(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;


        if (Contact::create($data)){
            return 'success';
        }
        else{
            return 'error';
        }
    }

    public function test(Request $request){
        $image = "";
        $passport_file = "";
        $academic_files = "";
        $research_paper = "";

        $dir = "Applicant/";
        if (!empty($request->file('passport_file'))){
            $passport_file =  $this->save_file($request->file('passport_file'), $dir);
        }
        if (!empty($request->file('photo'))){
            $image =  $this->save_file($request->file('photo'), $dir);
        }

        if (!empty($request->file('academic_files'))){
            $academic_files =  $this->save_file($request->file('academic_files'), $dir);
        }

        if (!empty($request->file('research_paper'))){
            $research_paper =  $this->save_file($request->file('research_paper'), $dir);
        }

        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['dob'] = $request->dob;
        $data['present_address'] = $request->present_address;
        $data['permanent_address'] = $request->permanent_address;
        $data['mobile'] = $request->mobile;
        $data['nationality'] = $request->nationality;
        $data['passport_no'] = $request->passport_no;
        $data['student_type'] = $request->student_type;
        $data['previous_qualification'] = $request->previous_qualification;
        $data['interested_course'] = $request->interested_course;
        $data['photo'] = $image;
        $data['passport_file'] = $passport_file;
        $data['academic_files'] = $academic_files;
        $data['research_paper'] = $research_paper;
        if (Apply::create($data)){

            return 'success';
        }
        else{
            return 'error';
        }
    }

    public function blog_categories(){
        return Blogcategory::all();
    }
}

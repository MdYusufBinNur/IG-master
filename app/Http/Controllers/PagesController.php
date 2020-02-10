<?php

namespace App\Http\Controllers;



use App\Admin\Apply;
use App\Admin\Contact;
use App\Admin\Country;
use App\Repositories\ViewRepository;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public $common,$viewRepository;

    public function __construct(Common $common, ViewRepository $viewRepository)
    {
        $this->common = $common;
        $this->viewRepository = $viewRepository;
    }

    public function home() {
        $data = $this->viewRepository->home_blade();
        $countries = $data['countries'];
        $institutes = $data['institutes'];
        $sliders = $data['sliders'];
        $testimonials = $data['testimonials'];
        $blogs = $data['blogs'];
        $linkers = $data['linkers'];
        $services = $data['services'];
        $about = $data['about'];
        $owner = $data['owner'];

    	return view('View.home-new',compact('countries','institutes','sliders','testimonials','blogs','linkers','services','about','owner'));
    }

    public function about() {

        $about  = $this->viewRepository->about();
        $countries = $this->viewRepository->all_countries();
        return view('View.about', compact('about','countries'));
    }

    public function services() {
        $services = $this->viewRepository->services();
        $countries = $this->viewRepository->all_countries();
        return view('View.services',compact('services','countries'));
    }

    public function countries() {
        $countries = $this->viewRepository->all_countries();
        return view('View.countries', compact('countries'));
    }

    public function institutes() {
        $countries = $this->viewRepository->country_institute();
       // return $countries;
        return view('View.institutes', compact('countries'));
    }

    public function scholarships() {

        $countries = $this->viewRepository->success_story();

        return view('View.scholarships', compact('countries'));
    }

    public function blog() {
        $result = $this->viewRepository->view_all_blogs();
        $blogs = $result['blogs'];
        $max_id = $result['max_blog_id'];
        $countries = $this->viewRepository->all_countries();
        return view('View.blog', compact('blogs','max_id','countries'));
    }

    public function apply() {
        $countries = $this->viewRepository->all_countries();
        $courses = $this->viewRepository->all_courses();
        return view('View.apply',compact('countries','courses'));
    }

    public function course_details(Request $request){
        if ($request->find_course == "Select one")
        {
            return $this->common->send_notification('Please Select All Field','error');
        }
        $course_details = $this->viewRepository->course_details($request->except('_token'));
        $countries = $this->viewRepository->all_countries();

        return view('View.course_details',compact('course_details','countries'));
    }

    public function blog_details($id){
        $blog_detail = $this->viewRepository->blog_details($id);
        $countries = $this->viewRepository->all_countries();
        return view('View.blog_details', compact('blog_detail','countries'));
    }

    public function country_details($id){
        $countries = $this->viewRepository->all_countries();
        $country_details = $this->viewRepository->country_details($id);
        //return $country_details;
        return view('View.countries', compact('countries','country_details'));
    }

    public function save_apply(Request $request){
        $result = $this->viewRepository->save_apply($request);
        if ($result == 'success'){
            $notification = array(
                'message' => 'Successfully Applied',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Something ',
                'alert-type' => 'error'
            );
        }
        return back()->with($notification);
    }

    public function send_message(Request $request){

        $result  = $this->viewRepository->send_message($request);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;
        
        if ($result == 'success'){
            return $this->common->send_notification('Message Sent','success');
        }
        else{
            return $this->common->send_notification('Failed To Send Message','error');
        }
    }

    public function country_list(){
        return $this->viewRepository->country_list();
    }

    public function university_list($id){
        return $this->viewRepository->university_list($id);
    }

    public function program_list($id){
        return $this->viewRepository->program_list($id);
    }

    public function course_list($id){
        return $this->viewRepository->course_list($id);
    }

    public function sliders()
    {
        return $this->viewRepository->sliders();
    }

    public function load_more($id){
        $result =  $this->viewRepository->load_more_blog($id);
        return $result;
    }

}

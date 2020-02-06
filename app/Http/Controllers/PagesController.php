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
        return view('View.about', compact('about'));
    }

    public function services() {
        $services = $this->viewRepository->services();
        return view('View.services',compact('services'));
    }

    public function countries() {
        return view('View.countries');
    }

    public function institutes() {
        $countries = $this->viewRepository->country_institute();

//        return $countries;
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
        return view('View.blog', compact('blogs','max_id'));
    }

    public function apply() {
        return view('View.apply');
    }

    public function course_details(Request $request){
        if ($request->find_course == "Select one")
        {
            return $this->common->send_notification('Please Select All Field','error');
        }
        $course_details = $this->viewRepository->course_details($request->except('_token'));



        return view('View.course_details',compact('course_details'));
    }

    public function blog_details($id){
        $blog_detail = $this->viewRepository->blog_details($id);
        return view('View.blog_details', compact('blog_detail'));
    }


    public function save_apply(Request $request){
        //return $request;

        $commonClass = new Common();

        $image = "";
        $passport_file = "";
        $academic_files = "";
        $research_paper = "";

        $dir = "Applicant/";
        if (!empty($request->file('passport_file'))){
            $passport_file =  $commonClass->save_file($request->file('passport_file'), $dir);
        }
        if (!empty($request->file('photo'))){
            $image =  $commonClass->save_file($request->file('photo'), $dir);
        }

        if (!empty($request->file('academic_files'))){
            $academic_files =  $commonClass->save_file($request->file('academic_files'), $dir);
        }

        if (!empty($request->file('research_paper'))){
            $research_paper =  $commonClass->save_file($request->file('research_paper'), $dir);
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

        $data = array();

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;

        if (Contact::create($data)){
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

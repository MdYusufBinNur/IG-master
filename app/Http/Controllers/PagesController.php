<?php

namespace App\Http\Controllers;


use App\Admin\Apply;
use App\Admin\Blogcategory;
use App\Admin\Contact;
use App\Admin\Country;
use App\Admin\Course;
use App\Admin\ParentProgram;
use App\Admin\Program;
use App\Admin\Scholarship;
use App\Admin\SetUpApplyProcess;
use App\Admin\UniCategory;
use App\Admin\University;
use App\Repositories\ViewRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public $common, $viewRepository;

    public function __construct(Common $common, ViewRepository $viewRepository)
    {
        $this->common = $common;
        $this->viewRepository = $viewRepository;
    }

    public function home()
    {
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

        return view('View.home-new', compact('countries', 'institutes', 'sliders', 'testimonials', 'blogs', 'linkers', 'services', 'about', 'owner'));
    }

    public function about()
    {

        $about = $this->viewRepository->about();
        $countries = $this->viewRepository->all_countries();
        $owner = $this->viewRepository->owner();
        return view('View.about', compact('about', 'countries', 'owner'));
    }

    public function services()
    {
        $services = $this->viewRepository->services();
        $countries = $this->viewRepository->all_countries();
        $owner = $this->viewRepository->owner();
        return view('View.services', compact('services', 'countries', 'owner'));
    }

    public function countries()
    {
        $countries = $this->viewRepository->all_countries();
        $owner = $this->viewRepository->owner();
        return view('View.countries', compact('countries', 'owner'));
    }

    public function institutes()
    {
        $countries = $this->viewRepository->country_institute();
        $owner = $this->viewRepository->owner();
        // return $countries;
        return view('View.institutes', compact('countries', 'owner'));
    }

    public function scholarships()
    {

    }

    public function stories()
    {

        $countries = $this->viewRepository->success_story();
        $owner = $this->viewRepository->owner();
        return view('View.stories', compact('countries', 'owner'));
    }

    public function blog()
    {
        $result = $this->viewRepository->view_all_blogs();
        $blogs = $result['blogs'];
        $max_id = $result['max_blog_id'];
        $countries = $this->viewRepository->all_countries();
        $categories = $this->viewRepository->blog_categories();
        $owner = $this->viewRepository->owner();
        return view('View.blog', compact('blogs', 'max_id', 'countries', 'categories', 'owner'));
    }

    public function apply()
    {
        $countries = $this->viewRepository->all_countries();
        $courses = $this->viewRepository->all_courses();
        $owner = $this->viewRepository->owner();
        return view('View.apply', compact('countries', 'courses', 'owner'));
    }

    public function course_details(Request $request)
    {
        if ($request->find_course == "Select one") {
            return $this->common->send_notification('Please Select All Field', 'error');
        }
        $course_details = $this->viewRepository->course_details($request->except('_token'));
        $countries = $this->viewRepository->all_countries();
        $owner = $this->viewRepository->owner();
        return view('View.course_details', compact('course_details', 'countries', 'owner'));
    }

    public function blog_details($id)
    {
        $blog_detail = $this->viewRepository->blog_details($id);
        $countries = $this->viewRepository->all_countries();
        $owner = $this->viewRepository->owner();
        return view('View.blog_details', compact('blog_detail', 'countries', 'owner'));
    }

    public function country_details($id)
    {
        $countries = $this->viewRepository->all_countries();
        $country_details = $this->viewRepository->country_details($id);
        $owner = $this->viewRepository->owner();
        //return $country_details;
        return view('View.countries', compact('countries', 'country_details', 'owner'));
    }

    public function req_to_callback(Request $request)
    {
        $result = $this->viewRepository->req_to_callback($request);
        if ($result == 'success') {
            $notification = array(
                'message' => 'Successfully Applied',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            );
        }
        return back()->with($notification);
    }

    public function save_apply(Request $request)
    {
        // return $request;
        $result = $this->viewRepository->save_apply($request);
        if ($result == 'success') {
            $notification = array(
                'message' => 'Successfully Applied',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            );
        }
        return back()->with($notification);
    }

    public function send_message(Request $request)
    {

        $result = $this->viewRepository->send_message($request);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;

        if ($result == 'success') {
            return $this->common->send_notification('Message Sent', 'success');
        } else {
            return $this->common->send_notification('Failed To Send Message', 'error');
        }
    }

    public function country_list()
    {
        return $this->viewRepository->country_list();
    }

    public function university_list($id)
    {
        return $this->viewRepository->university_list($id);
    }

    public function program_list($id)
    {
        return $this->viewRepository->program_list($id);
    }

    public function course_list($id)
    {
        return $this->viewRepository->course_list($id);
    }

    public function sliders()
    {
        return $this->viewRepository->sliders();
    }

    public function load_more($id)
    {
        $result = $this->viewRepository->load_more_blog($id);
        return $result;
    }

    public function test_crud(Request $request)
    {
        $dir = "Applicant";
        if (!empty($request->file('file'))) {
            $imageUrl = $this->common->save_file($request->file('file'), $dir);
        }
        return response()->json([
            'name' => $imageUrl
        ]);
    }

    public function load_categorized_blog($id)
    {
        return $this->viewRepository->load_categorized_blog($id);
    }

    public function load_more_categorized_blog($blog_id, $max_blog_id)
    {
        return $this->viewRepository->load_more_categorized_blog($blog_id, $max_blog_id);
    }

    public function find_universities()
    {
        $uni_categories = UniCategory::with('university')->get();
        $owner = $this->viewRepository->owner();
        return view('View.university', compact('uni_categories', 'owner'));
    }

    public function find_university($id)
    {

        $university = University::find($id);
        $owner = $this->viewRepository->owner();
        return view('View.uni_details', compact('university', 'owner'));
    }

    public function find_courses()
    {
        $owner = $this->viewRepository->owner();
        $programs = ParentProgram::with('program.course')->get();

        $courses = Course::all();

        return view('View.course', compact('programs', 'owner', 'courses'));

    }

    public function find_scholarships()
    {

        $owner = $this->viewRepository->owner();
        $scholarships = Scholarship::all();
        $processes = SetUpApplyProcess::all();
        return view('View.scholarships', compact('owner', 'scholarships', 'processes'));
    }

    public function application_process()
    {
    }

    public function req_call_back()
    {
        $owner = $this->viewRepository->owner();
        $countries = $this->viewRepository->all_countries();
        $courses = $this->viewRepository->all_courses();

        return view('View.request_for_call', compact('owner', 'countries', 'courses'));
    }

    public function book_an_appointment()
    {
        $owner = $this->viewRepository->owner();
        $countries = $this->viewRepository->all_countries();
        $courses = $this->viewRepository->all_courses();

        return view('View.appointment', compact('owner', 'countries', 'courses'));
    }

    public function req_for_call(Request $request)
    {
        $result = $this->viewRepository->req_to_callback($request);
        if ($result == 'success') {
            return $this->common->send_notification('Message Sent', 'success');
        } else {
            return $this->common->send_notification('Failed', 'error');
        }

    }

    public function detailed_course($id)
    {
        $course_details = Course::where('id', '=', $id)->first();
        return view('View.course_detail_info_page', compact('course_details'));
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/ig_admin', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@home')->name('/');

Route::get('/view_about', 'PagesController@about')->name('view_about');
Route::get('/view_services', 'PagesController@services')->name('view_services');
Route::get('/view_countries', 'PagesController@countries')->name('view_countries');
Route::get('/view_institutes', 'PagesController@institutes')->name('view_institutes');
Route::get('/view_scholarships', 'PagesController@scholarships')->name('view_scholarships');
Route::get('/view_stories', 'PagesController@stories')->name('view_stories');
Route::get('/view_blog', 'PagesController@blog')->name('view_blog');
Route::get('/view_apply', 'PagesController@apply')->name('view_apply');
Route::get('/view_find-course', 'PagesController@find')->name('view_find-course');



Route::post('req_to_callback', 'PagesController@req_to_callback');
Route::post('save_apply', 'PagesController@save_apply');
Route::post('send_message', 'PagesController@send_message');
Route::get('get_country','PagesController@country_list');
Route::get('get_university/{id}','PagesController@university_list');
Route::get('get_program/{id}','PagesController@program_list');
Route::get('get_courses/{id}','PagesController@course_list');
Route::post('get_courses_details','PagesController@course_details');
Route::get('get_blog_details/{id}','PagesController@blog_details');
Route::get('load_more_blog/{id}','PagesController@load_more');
Route::get('load_categorized_blog/{id}','PagesController@load_categorized_blog');
Route::get('load_more_categorized_blog/{id}/{max_blog_id}','PagesController@load_more_categorized_blog');
Route::get('country_details/{id}','PagesController@country_details');
Route::get('/reset/credential','HomeController@reset')->middleware('auth');
Route::post('reset','HomeController@reset_pass')->name('reset/credential')->middleware('auth');
Route::post('projects/media', 'PagesController@test_crud')->name('projects.storeMedia');

Route::get('find_universities','PagesController@find_universities');
Route::get('find_university/{id}','PagesController@find_university');
Route::get('find_courses','PagesController@find_courses');
Route::get('find_scholarships','PagesController@find_scholarships');
Route::get('application_process','PagesController@application_process');
Route::get('req_call_back','PagesController@req_call_back');
Route::get('book_an_appointment','PagesController@book_an_appointment');
Route::get('detailed_course/{id}','PagesController@detailed_course');
Route::post('req_for_call','PagesController@req_for_call');


Route::group(['namespace' => 'Admin', 'middleware' => ['auth']] , function () {
    Route::resource('abouts', 'AboutController');
    Route::resource('applies', 'ApplyController')->only(['index', 'show']);;
    Route::resource('countries', 'CountryController');
    Route::resource('blogs', 'BlogController');
    Route::resource('contacts', 'ContactController');
    Route::resource('institutes', 'InstituteController');
    Route::resource('courses', 'CourseController');
    Route::resource('owners', 'OwnerController');
    Route::resource('procedures', 'ProcedureController');
    Route::resource('programs', 'ProgramController');
    Route::resource('scholarships', 'ScholarshipController');
    Route::resource('services', 'ServiceController');
    Route::resource('sliders', 'SliderController');
    Route::resource('linkers', 'LinkerController');
    Route::resource('stories', 'StoryController');
    Route::resource('testimonials', 'TestimonialController');
    Route::resource('universities', 'UniversityController');
    Route::resource('blogcategories', 'BlogcategoryController');
    Route::resource('uni_categories', 'UniCategoryController');
    Route::resource('set_up_apply_processes', 'SetUpApplyProcessController');
    Route::resource('parent_programs', 'ParentProgramController');
    Route::resource('req_to_call_backs', 'ReqToCallBackController');
    Route::post('make_checked', 'ReqToCallBackController@make_checked');
    //Route::resource('req_to_call', 'ReqToCallBackController');

    Route::get('/university/{id}', 'UniversityController@find_university');
    Route::get('/program/{id}', 'UniversityController@find_program');
});

Route::get('{path}',"PagesController@home")->where( 'path', '([A-z]+)?' );
Route::get('{path}/{id}',"PagesController@home")->where( 'path', '([A-z]+)?' );
Route::get('{path}/{id}/{d}',"PagesController@home")->where( 'path', '([A-z]+)?' );





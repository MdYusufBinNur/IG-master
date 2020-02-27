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

Route::get('/', 'PagesController@home')->name('/');

Route::get('/view_about', 'PagesController@about')->name('view_about');
Route::get('/view_services', 'PagesController@services')->name('view_services');
Route::get('/view_countries', 'PagesController@countries')->name('view_countries');
Route::get('/view_institutes', 'PagesController@institutes')->name('view_institutes');
Route::get('/view_scholarships', 'PagesController@scholarships')->name('view_scholarships');
Route::get('/view_blog', 'PagesController@blog')->name('view_blog');
Route::get('/view_apply', 'PagesController@apply')->name('view_apply');
Route::get('/view_find-course', 'PagesController@find')->name('view_find-course');


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

Route::post('projects/media', 'PagesController@test_crud')->name('projects.storeMedia');

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
});





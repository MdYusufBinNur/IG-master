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

Route::group(['namespace' => 'Admin', 'middleware' => ['auth']] , function () {
    Route::resource('abouts', 'AboutController');
    Route::resource('applies', 'ApplyController')->only(['index', 'show']);;
    Route::resource('countries', 'CountryController');
    Route::resource('contacts', 'ContactController');
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

});

Route::get('/', 'PagesController@home')->name('/');
Route::get('/view_about', 'PagesController@about')->name('view_about');
Route::get('/view_services', 'PagesController@services')->name('view_services');
Route::get('/view_countries', 'PagesController@countries')->name('view_countries');
Route::get('/view_institutes', 'PagesController@institutes')->name('view_institutes');
Route::get('/view_scholarships', 'PagesController@scholarships')->name('view_scholarships');
Route::get('/view_blog', 'PagesController@blog')->name('view_blog');
Route::get('/view_apply', 'PagesController@apply')->name('view_apply');
Route::get('/view_find-course', 'PagesController@find')->name('view_find-course');



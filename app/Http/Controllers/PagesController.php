<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {
    	return view('View.home-new');
    }
    public function about() {
        return view('View.about');
    }
    public function services() {
        return view('View.services');
    }
    public function countries() {
        return view('View.countries');
    }
    public function institutes() {
        return view('View.institutes');
    }
    public function scholarships() {
        return view('View.scholarships');
    }
    public function blog() {
        return view('View.blog');
    }
    public function apply() {
        return view('View.apply');
    }
    public function save_apply(Request $request){
        return $request;
    }
}

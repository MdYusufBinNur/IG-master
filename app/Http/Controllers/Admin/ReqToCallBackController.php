<?php

namespace App\Http\Controllers\Admin;

use App\Admin\ReqToCallBack;
use App\Http\Controllers\Controller;
use App\Repositories\ReqToCallBackRepository;
use Illuminate\Http\Request;

class ReqToCallBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $callBackRepository;
    public function __construct(ReqToCallBackRepository $callBackRepository)
    {
        return $this->callBackRepository = $callBackRepository;
    }

    public function index()
    {
        $applicants = $this->callBackRepository->index();
        //return $applicants;
       return view('Admin.Apply.appointment',compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\ReqToCallBack  $reqToCallBack
     * @return ReqToCallBack|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function show(ReqToCallBack $reqToCallBack)
    {
        return $this->callBackRepository->show($reqToCallBack);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\ReqToCallBack  $reqToCallBack
     * @return \Illuminate\Http\Response
     */
    public function edit(ReqToCallBack $reqToCallBack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\ReqToCallBack  $reqToCallBack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReqToCallBack $reqToCallBack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\ReqToCallBack  $reqToCallBack
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReqToCallBack $reqToCallBack)
    {
        //
    }

    public function make_checked(Request $request)
    {
       //return $request;
        if ($request->checked)
        {
            ReqToCallBack::find($request->applicant_id)->update(['accepted' => true]);
            return $this->callBackRepository->returnBack('success');
        }
        return back()->with('error','Something went wrong !!');
    }
}

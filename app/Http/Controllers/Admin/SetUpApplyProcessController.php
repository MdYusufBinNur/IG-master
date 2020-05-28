<?php

namespace App\Http\Controllers\Admin;

use App\Admin\SetUpApplyProcess;
use App\Http\Controllers\Controller;
use App\Repositories\SetUpApplyProcessRepo;
use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;

class SetUpApplyProcessController extends Controller
{
    public $applyProcessRepo;
    public function __construct(SetUpApplyProcessRepo $applyProcessRepo)
    {

        $this->applyProcessRepo = $applyProcessRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function index()
    {
        $processes = $this->applyProcessRepo->index();
        return  view('Admin.Scholarship.apply_process_list', compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.Scholarship.setup_apply_process');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $result = $this->applyProcessRepo->store($request);
        if ($result == 'success')
        {
            return $this->applyProcessRepo->send_notification($result,'Successfully Done');
        }
        return $this->applyProcessRepo->send_notification('error',"Failed !!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\SetUpApplyProcess  $setUpApplyProcess
     * @return SetUpApplyProcess
     */
    public function show(SetUpApplyProcess $setUpApplyProcess)
    {
        return $setUpApplyProcess;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\SetUpApplyProcess  $setUpApplyProcess
     * @return \Illuminate\Http\Response
     */
    public function edit(SetUpApplyProcess $setUpApplyProcess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\SetUpApplyProcess  $setUpApplyProcess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SetUpApplyProcess $setUpApplyProcess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\SetUpApplyProcess  $setUpApplyProcess
     * @return string
     */
    public function destroy(SetUpApplyProcess $setUpApplyProcess)
    {
        return $this->applyProcessRepo->delete($setUpApplyProcess);
    }
}

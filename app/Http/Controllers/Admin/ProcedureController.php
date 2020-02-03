<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Procedure;
use App\Http\Controllers\Controller;
use App\Repositories\ProcedureRepository;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public $procedureRepository;
    public function __construct(ProcedureRepository $procedureRepository)
    {
        $this->procedureRepository = $procedureRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $results = $this->procedureRepository->index();
        $procedures = $results['procedures'];
        $countries = $results['countries'];

        return view('Admin.Procedure.procedure_list', compact('procedures','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $countries = $this->procedureRepository->all_countries();
        return view('Admin.Procedure.procedure', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $result = $this->procedureRepository->store($request);
        return $this->procedureRepository->returnBack($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Procedure  $procedure
     * @return Procedure|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function show(Procedure $procedure)
    {
        return $this->procedureRepository->show($procedure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedure $procedure)
    {
        $this->procedureRepository->delete($procedure);
    }


}

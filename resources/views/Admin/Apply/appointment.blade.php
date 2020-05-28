@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" aria-hidden="true" data-notify="dismiss" class="close">×</button>
                            <span><b> Success - </b> {{ Session::get('success') }}</span>
                        </div>
                    @endif

                    @if(Session::get('error'))
                        <div class="alert alert-warning">
                            <button type="button" aria-hidden="true" data-notify="dismiss" class="close">×</button>
                            <span><b> Error - </b> {{ Session::get('error') }}</span>
                        </div>
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">Appointment List</h4>
                    <br>
                    <ul class="nav nav-pills nav-pills-primary " style="margin: 10px" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist"
                               aria-expanded="true">
                                New Request
                            </a>
                        </li>
                        <li class="nav-item" id="checked_req" onclick="init_db()">
                            <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">
                                Checked Request
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content tab-space">
                        <div class="tab-pane active" id="link1" aria-expanded="true">
                            <div class="card">
                                <div class="card-content">
                                    <div class="toolbar">
                                        <!--Here you can write extra buttons/actions for the toolbar-->
                                    </div>
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                               cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th class="text-center"> Name</th>
                                                <th class="text-center"> Email</th>
                                                <th class="text-center"> Phone</th>
                                                <th class="text-center disabled-sorting">Actions</th>
                                            </tr>
                                            </thead>

                                            <tbody>


                                            @if(!empty($applicants))
                                                @foreach($applicants as $applicant)
                                                    @if($applicant->accepted == false)
                                                        <tr>
                                                            <td class="text-center">{!! $applicant->first_name .' '. $applicant->last_name !!}</td>
                                                            <td class="text-center">{!! $applicant->email !!}</td>
                                                            <td class="text-center">{!! $applicant->mobile !!}</td>


                                                            <td class="text-center">
                                                                <a href="#"
                                                                   class="btn btn-simple btn-success btn-icon edit"
                                                                   data-toggle="modal" data-id="{{ $applicant->id }}"
                                                                   data-body="req_to_call_back" data-target="#Modal"><i
                                                                        class="ti-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="link2" aria-expanded="false">
                            <div class="card">
                                <div class="card-content">
                                    <div class="toolbar">
                                        <!--Here you can write extra buttons/actions for the toolbar-->
                                    </div>
                                    <div class="fresh-datatables">
                                        <table id="daaa" class="table table-striped table-no-bordered table-hover"
                                               cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th class="text-center"> Name</th>
                                                <th class="text-center"> Email</th>
                                                <th class="text-center"> Phone</th>
                                                <th class="text-center disabled-sorting">Actions</th>
                                            </tr>
                                            </thead>

                                            <tbody>


                                            @if(!empty($applicants))
                                                @foreach($applicants as $applicant)
                                                    @if($applicant->accepted == true)
                                                        <tr>
                                                            <td class="text-center">{!! $applicant->first_name .' '. $applicant->last_name !!}</td>
                                                            <td class="text-center">{!! $applicant->email !!}</td>
                                                            <td class="text-center">{!! $applicant->mobile !!}</td>

                                                            <td class="text-center">

                                                                <a href="#"
                                                                   class="btn btn-simple btn-success btn-icon edit"
                                                                   data-toggle="modal" data-id="{{ $applicant->id }}"
                                                                   data-body="req_to_call_back" data-target="#Modal"><i
                                                                        class="ti-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Appointment </h4>
                </div>
                <form action="{{ url('make_checked') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="applicant_id" hidden name="applicant_id">

                            <div class="form-group text-center">
                                <strong><h4 id="applicant_name">Arya Stark</h4></strong>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('image/user.png') }}" alt="" width="100" height="auto"
                                             id="applicant_image">
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <p id="applicant_email">arya@octoriz.com </p>
                                        <p id="applicant_mobile">01815625375 </p>
                                        <p id="applicant_nationality">Bnagladeshi </p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <table class="table  table-bordered ">
                                    <tr>
                                        <td>IELTS</td>
                                        <td><p id="ielts_points">-</p></td>
                                    </tr>
                                    <tr>
                                        <td>Present Qualification</td>
                                        <td><p id="applicant_present_qualification">pdf</p></td>
                                    </tr>
                                    <tr>
                                        <td>Interested Country</td>
                                        <td id="applicant_interested_country">Country Name</td>
                                    </tr>

                                    <tr>
                                        <td>Interested Course</td>
                                        <td id="applicant_interested_course">Course Name</td>
                                    </tr>
                                    <tr id="check_switch" class="check_switch">
                                        <td>Make Checked</td>
                                        <td >
                                            <input type="checkbox" id="switch_check" class="switch switch-trigger " name="checked">
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer check_switch" >
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>

                </form>


            </div>

        </div>
    </div>

@endsection

@section('script')

    <script src="{{asset('Admin/paper_dashboard/assets/js/datatable_search_pagination.js') }}"></script>

    {{--<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">datatable_search_pagination.js</script>--}}
@endsection



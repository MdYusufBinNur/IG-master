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
                            <span><b> Success - </b> {{ Session::get('error') }}</span>
                        </div>
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">Applicant List</h4>
                    <br>

                    <div class="card">
                        <div class="card-content">
                            <div class="toolbar">
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
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
                                            <tr>
                                                <td class="text-center">{!! $applicant->first_name .' '. $applicant->last_name !!}</td>
                                                <td class="text-center">{!! $applicant->email !!}</td>
                                                <td class="text-center">{!! $applicant->mobile !!}</td>

                                                <td class="text-center">

                                                    <a href="#" class="btn btn-simple btn-success btn-icon edit" data-toggle="modal" data-id="{{ $applicant->id }}" data-body="applie"  data-target="#Modal"><i class="ti-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--  end card  -->
                </div> <!-- end col-md-12 -->


            </div> <!-- end row -->

        </div>
    </div>

    <div class="modal fade" id="Modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Applicant Information</h4>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="applicant_id" hidden name="applicant_id">

                            <div class="form-group text-center">
                                <strong> <h4 id="applicant_name">Arya Stark</h4> </strong>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('image/user.png') }}" alt="" width="100" height="auto" id="applicant_image">
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <p id="applicant_email">arya@octoriz.com  </p>
                                        <p id="applicant_mobile">+971 xxxxxxx </p>
                                        <p id="applicant_nationality">Bnagladeshi </p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <table class="table table-striped table-bordered in">
                                    <tr>
                                        <th>Present Address</th>
                                        <th>Permanent Address</th>
                                        <th>Dat Of Birth</th>
                                    </tr>
                                    <tr>
                                        <td id="applicant_pre_address">-</td>
                                        <td id="applicant_per_address">-</td>
                                        <td id="applicant_dob">-</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="form-group">
                                <table class="table  table-bordered ">
                                    <tr>
                                        <td>IELTS</td>
                                        <td> <p id="ielts_points">-</p></td>
                                    </tr>
                                    <tr>
                                        <td>Present Qualification</td>
                                        <td> <p id="applicant_present_qualification">pdf</p></td>
                                    </tr>
                                    <tr>
                                        <td>Interested Country</td>
                                        <td id="applicant_interested_country">Country Name</td>
                                    </tr>
                                    <tr>
                                        <td>Interested University</td>
                                        <td id="applicant_interested_university">University Name</td>
                                    </tr>
                                    <tr>
                                        <td>Interested Program</td>
                                        <td id="applicant_interested_program">Program Name</td>
                                    </tr>

                                    <tr>
                                        <td>Interested Course</td>
                                        <td id="applicant_interested_course">Course Name</td>
                                    </tr>
                                    <tr>
                                        <td>Academic Certificates</td>
                                        <td  id="applicant_academic_certificate_"></td>
                                    </tr>

                                </table>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <h4 class="modal-title text-center">Comments</h4>
                                    <div class="col-md-12">
                                        <p id="applicant_comments"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </form>


            </div>

        </div>
    </div>

@endsection

@section('script')

    <script src="{{asset('Admin/paper_dashboard/assets/js/datatable_search_pagination.js') }}" ></script>

    {{--<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">datatable_search_pagination.js</script>--}}
@endsection



@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="{{asset('Admin/paper_dashboard/assets/tinymce/tinymce.min.js') }}" ></script>


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
                    <h4 class="title"> List</h4>
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
{{--                                        <th class="text-center"> Program Name</th>--}}
                                        <th class="text-center"> Course Name</th>

                                        <th class="text-center"> Course Details</th>

                                        <th class="text-center disabled-sorting">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($courses))
                                        @foreach($courses as $course)
                                            <tr>
{{--                                                <td class="text-center">{!! $course->program->program_name !!}</td>--}}
                                                <td class="text-center">{!! $course->course_name !!}</td>
                                                <td class="text-center text-justify">{!! substr($course->course_details,0,350)!!}</td>

                                                <td class="text-center">
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="modal" data-body="{{ "course" }}" data-id="{{ $course->id }}" data-target="#Modal"  onclick="tinyMCE_init()"><i class="ti-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-simple btn-info btn-icon del_brand remove" data-id="{{ $course->id }}" data-body="{{ "course" }}"  ><i class="ti-trash"></i></a>
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
                    <h4 class="modal-title">Course View</h4>
                </div>
                <form action="{{ url('courses') }}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="hidden" id="course_id"  name="course_id">

{{--                            <div class="form-group">--}}
{{--                                <label class="control-label" for="category_info">--}}
{{--                                    Old Program<star>*</star>--}}
{{--                                </label>--}}
{{--                                <input class="form-control" type="text" name="old_program_name" id="old_program_name" readonly/>--}}
{{--                            </div>--}}


                            <div class="form-group">
                                <label for="">Select Country<star>*</star></label>
                                <select class="form-control" data-style="btn-dark  btn-block" data-size="4"  name="country_id" id="country_id" onchange="get_university(this)" required >
                                    @if(!empty($countries))
                                        @foreach($countries as $country)
                                            <option value="{!! $country->id !!}">{!! $country->country_name !!}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Select University<star>*</star></label>

                                <select class="form-control sub_class" name="university_id" id="university_id" onchange="get_program(this)"  required="" tabindex="-98">

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Select Program<star>*</star></label>

                                <select class="form-control sub_class" name="program_id" id="program_id"   required="" tabindex="-98">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="course_name">
                                Course Title<star>*</star>
                            </label>
                            <input class="form-control" type="text" name="course_name" id="course_name" required/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="course_full_name">
                                Course Full Name<star>*</star>
                            </label>
                            <input class="form-control" type="text" name="course_full_name" id="course_full_name" required/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="course_fee">
                                Course Fee<star>*</star>
                            </label>
                            <input class="form-control" type="text" name="course_fee" id="course_fee" required/>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="course_duration">
                                Course Duration<star>*</star>
                            </label>
                            <input class="form-control" type="text" name="course_duration" id="course_duration" required/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="intake">
                                Intake<star>*</star>
                            </label>
                            <input class="form-control" type="text" name="intake" id="intake"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="course_details">
                                Course Details<star>*</star>
                            </label>
                            <textarea class="form-control" type="text" name="course_details" id="course_details">

                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default"  >Update</button>
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



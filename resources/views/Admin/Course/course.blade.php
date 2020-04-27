@extends('layouts.app')
@section('style')
    <script src="{{asset('Admin/paper_dashboard/assets/tinymce/tinymce.min.js') }}" >


    </script>
    <script>
        tinymce.init({
            selector:'textarea',
            toolbar: 'undo redo',
            // enable title field in the Image dialog
            image_title: true,
            // enable automatic uploads of images represented by blob or data URIs
            automatic_uploads: true,
            // add custom filepicker only to Image dialog
            file_picker_types: 'image',

            entity_encoding : "raw",
            height: 200,

        });

    </script>

@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

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
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <form id="registerFormValidation" action="{{ url('courses') }}" method="post">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('courses') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>COURSES</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">

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

                                <div class="form-group">
                                    <label class="control-label" for="course_name">
                                        Course Name<star>*</star>
                                    </label>
                                    <input class="form-control" type="text" name="course_name" id="course_name" required/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="course_details">
                                        Course Details<star>*</star>
                                    </label>
                                    <textarea class="form-control" type="text" name="course_details" id="course_details">

                                    </textarea>
                                </div>

                                <div class="category"><star>*</star> Required fields</div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

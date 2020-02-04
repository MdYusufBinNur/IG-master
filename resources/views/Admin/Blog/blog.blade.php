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
                            <span><b> Error - </b> {{ Session::get('error') }}</span>
                        </div>
                    @endif

                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <form id="registerFormValidation" action="{{ url('blogs') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('blogs') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>BLOG </strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label class="control-label" for="blog_title">
                                        Blog Title
                                    </label>

                                    <input class="form-control" type="text" name="blog_title" id="blog_title" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="blog_description">
                                        Description
                                    </label>

                                    <textarea class="form-control" name="blog_description" id="blog_description" rows="3" required>

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="blog_image"> Image </label>
                                    <input type="file" name="blog_image" class="form-control" required/>
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
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
                        <form id="registerFormValidation" action="{{ url('abouts') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('abouts') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>ABOUT</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label class="control-label" for="category_info">
                                        Title
                                    </label>
                                    <label for="category_name"></label>
                                    <input class="form-control" type="text" name="about_title" id="title"/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="title_description"> Description<star>*</star></label>
                                    <textarea class="form-control" name="about_description" id="title_description" rows="3">

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="about_mission"> Our Mission<star>*</star></label>
                                    <textarea class="form-control" name="about_mission" id="about_mission" rows="2">

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="about_vision"> Our Vision<star>*</star></label>
                                    <textarea class="form-control" name="about_vision" id="about_vision" rows="2">

                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Title Image </label>
                                    <input type="file" name="about_image" class="form-control"/>
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

@extends('layouts.app')

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
                        <form id="registerFormValidation" action="{{ url('services') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('services') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>SERVICE</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label class="control-label" for="service_title">
                                        Title
                                    </label>

                                    <input class="form-control" type="text" name="service_title" id="service_title" required/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="service_description"> Description<star>*</star></label>
                                    <textarea class="form-control" name="service_description" id="service_description" rows="3" required>

                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="service_image"> Image </label>
                                    <input type="file" name="service_image" class="form-control" required/>
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

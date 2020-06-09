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
                        <form id="registerFormValidation" action="{{ url('owners') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('owners') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>Owner Info</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label class="control-label" for="owner_name">
                                        Owner Name/ Organization Name
                                    </label>
                                    <input class="form-control" type="text" name="owner_name" id="owner_name" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="owner_name">
                                        Owner Email
                                    </label>
                                    <input class="form-control" type="email" name="owner_email" id="owner_email" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="owner_mobile">
                                        Owner Mobile
                                    </label>
                                    <input class="form-control" type="tel" name="owner_mobile" id="owner_mobile" required/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="owner_message"> Message <star>*</star></label>
                                    <textarea class="form-control" name="owner_message" id="owner_message" rows="3">

                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Owner/Organization Image </label>
                                    <input type="file" name="owner_image" accept="image/png,image/jpg,image/jpeg" class="form-control" required/>
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

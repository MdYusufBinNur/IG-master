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
                        <form id="registerFormValidation" action="{{ url('institutes') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('institutes') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>INSTITUTE</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label for="">Select Country<star>*</star></label>
                                <select  title="-" class="selectpicker"  data-style="btn-dark btn-block" data-size="4" name="country_id" id="country_id" required >

                                    @if(!empty($countries))
                                        @foreach($countries as $country)
                                            <option value="{!! $country->id !!}">{!! $country->country_name !!}</option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label class="control-label" for="institute_name">
                                        Title
                                    </label>

                                    <input class="form-control" type="text" name="institute_name" id="institute_name" required/>
                                </div>


                                <div class="form-group">
                                    <label class="control-label" for="institute_image"> Image </label>
                                    <input type="file" name="institute_image" class="form-control" required/>
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

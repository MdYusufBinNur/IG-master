@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <form id="registerFormValidation" action="{{ url('uni_categories') }}" method="post">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('uni_categories') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>CATEGORY</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">

                                <div class="form-group">
                                    <label class="control-label" for="category_info">
                                        Category Name<star>*</star>
                                    </label>
                                    <label for="category_name"></label><input class="form-control" type="text" name="category_name" id="category_name" required/>
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

    {{--Sociallinker_Icon--}}
@endsection

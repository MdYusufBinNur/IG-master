@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-search"></i> Search
            Results for Courses</h2>
    </section>

    <section class="services-details mb-5">
        <div class="container">
            @if(!empty($course_details))
                <div class="row">
                    <div class="col-sm-6 col-md-6 pb-1">
                        <h5>COUNTRY: <strong class="text-muted">{{ $course_details->program->university->country->country_name }}</strong></h5>
                    </div>
                    <div class="col-sm-6 col-md-6 pb-1">
                        <h5>UNIVERSITY: <strong class="text-muted">{{ $course_details->program->university->university_name }}</strong></h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 pb-1">
                        <h5>PROGRAM: <strong class="text-muted">{{ $course_details->program->program_name }}</strong></h5>
                    </div>
                    <div class="col-sm-6 col-md-6 pb-1">
                        <h5>COURSE: <strong class="text-muted">{{ $course_details->course_name }}</strong></h5>
                    </div>
                </div>
                <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">Courses Description:</h2>
                <div class="card shadow border-0 p-3">
                    {!! $course_details->course_details !!}

                </div>

            @endif
        </div>
    </section>

@endsection

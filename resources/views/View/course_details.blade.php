@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-search"></i> Search
            Results for Courses</h2>
    </section>

    <section class="institutes mb-5">
        <div class="container-fluid">
            @if(!empty($course_details))
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 class="display-5 text-uppercase text-center color-primary mb-5">{{$course_details[0]->course_full_name}}</h1>
                            </div>
                            <div class="col-md-12">
                                <p class=""><strong>Course Name :</strong>   {{ $course_details[0]->course_name }}</p>
                                <p class=""><strong>Course Fee :</strong>    {{ $course_details[0]->course_fee }}</p>
                                <p class=""><strong>Course Duration :</strong>   {{ $course_details[0]->course_duration }}</p>
                                <p class=""><strong>Course Intake :</strong> {{ $course_details[0]->intake }}</p>
                            </div>
                            <div class="col-md-12"></div>
                            <div class="col-md-12 mt-2">
                                <p class="text-center">
                                    {!! $course_details[0]->course_details !!}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section id="institutes" class="my-5">
        <h1 class="display-5 text-uppercase text-center color-primary mb-5">{{ "Apply Now" }}</h1>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-2 text-center mt-1">
                    <a class="btn btn-call text-white" href="{{ url('req_call_back') }}">Request For A Call &nbsp; <i class="fas fa-phone"></i></a>

                </div>
                <div class="col-md-2 text-center mt-1">
                    <a href="{{ url('book_an_appointment') }}" class="btn btn-book text-white">Book Appointment &nbsp; <i class="fas fa-calendar"></i></a>

                </div>
            </div>
            {{--            <div class="row">--}}
            {{--                <div class="col-md-8 offset-2">--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col-md-6 text-right">--}}
            {{--                            <a class="btn btn-call text-white" href="{{ url('req_call_back') }}">Request For A Call &nbsp; <i class="fas fa-phone"></i></a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-md-6 text-left">--}}

            {{--                            <a href="{{ url('book_an_appointment') }}" class="btn btn-book text-white">Book Appointment &nbsp; <i class="fas fa-calendar"></i></a>--}}

            {{--                        </div>--}}
            {{--                    </div>--}}

            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </section>
@endsection

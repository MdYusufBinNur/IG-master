@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-search"></i>
            Courses</h2>
    </section>

    <section class="institutes mb-5">
        <div class="container-fluid">
            <div class="col-md-12 text-center">
                <h1 class="display-5 text-uppercase text-center color-primary mb-5"> Program List</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        @if(!empty($programs))
                            @foreach($programs as $key => $program)
                                @if($key == 0)
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-{{$key}}-tab" data-toggle="pill"
                                           href="#pills-{{$key}}" role="tab" aria-controls="pills-{{$key}}"
                                           aria-selected="true">{{ $program->name }}</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-{{$key}}-tab" data-toggle="pill"
                                           href="#pills-{{$key}}" role="tab" aria-controls="pills-{{$key}}"
                                           aria-selected="true">{{ $program->name }}</a>
                                    </li>
                                @endif

                            @endforeach
                        @endif

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        @if(!empty($programs))
                            @foreach($programs as $key => $program)
                                @if($key == 0)
                                    <div class="tab-pane fade show active" id="pills-{{$key}}" role="tabpanel"
                                         aria-labelledby="pills-{{$key}}-tab">
                                        <div class="row pt-3">
                                            @foreach($program->program as  $program_value)
                                                @foreach($program_value->course as $course_key => $course_val)
                                                    <div class="col-sm-12 col-md-3 col-lg-3 p-3 mb-2">
                                                        <div class="card shadow w-100 h-100 border-0 ">
                                                            <a href="{{ url('find_course/'.$course_val->id) }}"
                                                               style="text-decoration:none">
                                                                <p class="text-center text-dark mt-2"> {{$course_val->course_name}}</p>
                                                                <p class="text-center text-dark mt-2"> {{$course_val->course_duration}}</p>
                                                                <p class="text-center text-dark mt-2"> {{$course_val->course_fee}}</p>
                                                                <p class="text-center text-dark mt-2"> {{$course_val->intake}}</p>

                                                                {{--                                                                <p class="text-center text-uppercase text-dark mt-2">{{ $course_val->course_full_name }}</p>--}}
                                                            </a>

                                                        </div>
                                                        {{--                                                        <div class="text-center mt-2">--}}
                                                        {{--                                                            <a href="{{ url('detailed_course').'/'.$course_val->id }}"--}}
                                                        {{--                                                               class="btn btn-theme-sm text-white text-center text-capitalize text-center">Course--}}
                                                        {{--                                                                Details</a>--}}
                                                        {{--                                                        </div>--}}

                                                    </div>

                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>

                                @else
                                    <div class="tab-pane fade " id="pills-{{$key}}" role="tabpanel"
                                         aria-labelledby="pills-{{$key}}-tab">
                                        <div class="row pt-3 ">
                                            @foreach($program->program as  $program_value)
                                                @foreach($program_value->course as $course_key => $course_val)
                                                    <div class="col-sm-12 col-md-3 col-lg-3 p-3 mb-2">
                                                        <div class="card shadow w-100 h-100 border-0 ">
                                                            <a href="{{ url('find_course/'.$course_val->id) }}"
                                                               style="text-decoration:none">
                                                                <p class="text-center text-dark mt-2"> {{$course_val->course_name}}</p>
                                                                <p class="text-center text-dark mt-2"> {{$course_val->course_duration}}</p>
                                                                <p class="text-center text-dark mt-2"> {{$course_val->course_fee}}</p>
                                                                <p class="text-center text-dark mt-2"> {{$course_val->intake}}</p>
                                                                {{--                                                                <p class="text-center text-uppercase text-dark mt-2">{{ $course_val->course_full_name }}</p>--}}
                                                            </a>

                                                        </div>
                                                        {{--                                                        <div class="text-center mt-2">--}}
                                                        {{--                                                            <a href="{{ url('detailed_course').'/'.$course_val->id }}"--}}
                                                        {{--                                                               class="btn btn-theme-sm text-white text-center text-capitalize text-center">Course--}}
                                                        {{--                                                                Details</a>--}}
                                                        {{--                                                        </div>--}}
                                                    </div>

                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>

                                @endif

                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses_list mb-5">
        <div class="container-fluid">
            <div class="col-md-12 text-center">
                <h1 class="display-5 text-uppercase text-center color-primary mb-5"> Popular Courses </h1>
            </div>
            <div class="row">
                @if(!empty($courses))
                    @foreach($courses as $key => $course_val)
                        <div class="col-sm-12 col-md-3 col-lg-3 p-3 mb-2" >
                            <div class="card shadow w-100 h-100 border-0 ">
                                <a href="{{ url('find_course/'.$course_val->id) }}"
                                   style="text-decoration:none">
                                    <h2 class="text-center  text-dark mt-2"> {{$course_val->course_name}}</h2>
                                    <p class="text-center text-dark mt-2"> Duration: {{$course_val->course_duration}}</p>
{{--                                    <p class="text-center text-dark mt-2"> {{$course_val->course_fee}}</p>--}}
{{--                                    <p class="text-center text-dark mt-2"> {{$course_val->intake}}</p>--}}

                                    {{--                                                                <p class="text-center text-uppercase text-dark mt-2">{{ $course_val->course_full_name }}</p>--}}
                                </a>
                                <div class="text-center btn-find">
                                    <a href="{{ url('detailed_course').'/'.$course_val->id }}"
                                       class="btn text-white text-center text-capitalize text-center">Course
                                        Details</a>
                                </div>
                            </div>


                        </div>
                    @endforeach
            </div>
                @endif
        </div>

    </section>

@endsection

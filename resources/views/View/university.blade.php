@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-university"></i>
            universities</h2>
    </section>


    <section class="institutes mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        @if(!empty($uni_categories))
                            @foreach($uni_categories as $key => $university)
                                @if($key == 0)
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-{{$key}}-tab" data-toggle="pill"
                                           href="#pills-{{$key}}" role="tab" aria-controls="pills-{{$key}}"
                                           aria-selected="true">{{ $university->name }}</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-{{$key}}-tab" data-toggle="pill"
                                           href="#pills-{{$key}}" role="tab" aria-controls="pills-{{$key}}"
                                           aria-selected="true">{{ $university->name }}</a>
                                    </li>
                                @endif

                            @endforeach
                        @endif

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        @if(!empty($uni_categories))
                            @foreach($uni_categories as $key => $university)
                                @if($key == 0)
                                    <div class="tab-pane fade show active" id="pills-{{$key}}" role="tabpanel"
                                         aria-labelledby="pills-{{$key}}-tab">
                                        <div class="row pt-3">
                                            @foreach($university->university as $uni_key => $uni_value)

                                                <div class="col-sm-12 col-md-3 col-lg-3 p-3">
                                                    <div class="card shadow w-100 h-100 border-0 ">
                                                        <a href="{{ url('find_university/'.$uni_value->id) }}"
                                                           style="text-decoration:none">
                                                            <img src="{{ asset($uni_value->university_image) }}"
                                                                 class="card-img-top object-cover">

                                                            <p class="text-center text-uppercase text-dark mt-2">{{ $uni_value->university_name }}</p>
                                                        </a>

                                                    </div>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>

                                @else
                                    <div class="tab-pane fade " id="pills-{{$key}}" role="tabpanel"
                                         aria-labelledby="pills-{{$key}}-tab">
                                        <div class="row pt-3">
                                            @foreach($university->university as $uni_key => $uni_value)

                                                <div class="col-sm-12 col-md-3 col-lg-3 p-3">
                                                    <div class="card shadow w-100 h-100 border-0 ">
                                                        <a href="{{ url('find_university/'.$uni_value->id) }}"
                                                           style="text-decoration:none">
                                                            <img src="{{ asset($uni_value->university_image) }}"
                                                                 class="card-img-top object-cover">

                                                            <p class="text-center text-uppercase text-dark mt-2">{{ $uni_value->university_name }}</p>
                                                        </a>

                                                    </div>
                                                </div>

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

@endsection

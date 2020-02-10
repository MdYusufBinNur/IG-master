@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-info-circle"></i> about</h2>
    </section>
    @if(!empty($about))

        <section class="about m-3">
            <div class="card border-0 shadow">
                <div class="row">

                    <div class="col-sm-6 text-justify">
                        <p class=" p-3 mt-5">{{ $about->about_description }}</p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <input type="image" src="{{ asset($about->about_image) }}" width="350" height="auto" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="mission-vision m-3">
            <div class="card border-0 shadow">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="text-center text-uppercase font-weight-bold color-primary p-2">Mission<br><small>of IG
                                education</small></h4>
                        <p class="text-justify p-3">{{ $about->about_mission }}</p>
                    </div>
                    <div class="col-sm-6">
                        <h4 class=" text-center text-uppercase font-weight-bold color-primary p-2">vision<br><small>of IG
                                education</small></h4>
                        <p class="text-justify p-3">{{ $about->about_vision }}</p>
                    </div>
                </div>
            </div>
        </section>

    @endif
   {{-- <section class="about-section mb-5">
        <div class="container">
            <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">IG Education<br><small>All that you
                    should know</small>
            </h2>
            <div class="card border-0 shadow p-3">
                <div class="row">
                    <div class="text-center mx-auto">
                        <img src="{{url('https://placeimg.com/128/128/people')}}" class="rounded-circle img-fluid" alt="">
                        <h4 class="text-center text-uppercase font-weight-bold color-primary p-3">John Doe
                            <br><small>Managing
                                Director</small></h4>
                    </div>
                    <div class="text-justify p-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ducimus veniam dicta dolor in porro
                            nesciunt placeat similique quidem distinctio, aliquam quam illum esse recusandae fugiat nulla
                            sapiente et necessitatibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}

@endsection

@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-info-circle"></i> about us</h2>
    </section>

    @if(!empty($about))

        <section class="about-section mb-5">
            <div class="container">
                <div class="card border-0 shadow p-3">
                    <div class="row">
                        <div class="col-sm-8 ">
                            <hr class="gradient-bg left-line">
                            <p class="">{!! $about->about_description !!}</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <figure class="team-img">
                                <img  src="{{ asset($about->about_image) }}" width="350" height="auto" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    @if(!empty($about))
        <section class="mission-vision m-3">
            <div class="container">
                <div class="card border-0 shadow p-3">
                    <div class="row">
                        <div class="text-justify p-3">
                            <hr class="gradient-bg left-line">
                            <h4 class=" text-uppercase font-weight-bold color-primary">Mission<small> of IG
                                    education</small></h4>
                            <p class="text-justify">{!! $about->about_mission !!}</p>
                        </div>

                        <div class="text-justify p-3">
                            <hr class="gradient-bg left-line">
                            <h4 class="text-uppercase font-weight-bold color-primary ">vision<small> of IG
                                    education</small></h4>
                            <p class="text-justify">{!!  $about->about_vision !!}</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    @endif

@endsection

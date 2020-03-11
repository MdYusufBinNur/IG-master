@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-blog"></i> BLOG
            details</h2>
    </section>

    <section class="blog-details">
        <div class="container">
            <div class="row card shadow m-2">
                @if(!empty($blog_detail))
                    <div class="col-12">
                        <img src="{{ asset($blog_detail->blog_image) }}" class="img-fluid rounded-top mx-auto d-block" alt="">
                    </div>
                    <div class="col-12 ">
                        <h5 class="font-weight-bold display-4 pt-3 pb-3">{!! $blog_detail->blog_title !!}</h5>
                        <p class="text-justify">{!! $blog_detail->blog_description !!}</p>
                    </div>
                @endif

            </div>
        </div>
    </section>

@endsection

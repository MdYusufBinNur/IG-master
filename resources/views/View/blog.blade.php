@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-blog"></i> blog</h2>
    </section>


    <!--Masonry Grid of blog-->
    <section class="blog mb-5">
        <div class="container bg-light rounded ">
            <div class="card-columns rounded p-3">
                @if(!empty($blogs))
                    @foreach($blogs as $blog)
                            <div class="card border-0 shadow-sm">
                                <img src="{{ asset($blog->blog_image) }}" class="card-img-top" alt="">
                                <div class="card-body p-2">
                                    <h5 class="card-title font-weight-bold">{{ $blog->blog_title }}</h5>
                                    <p class="card-text">{!! substr($blog->blog_description, 0, 250) !!}...
                                    </p>
                                    <a href="{{ url('get_blog_details/').'/'.$blog->id  }}" class="btn btn-theme-sm text-white text-capitalize text-center">Read more</a>
                                </div>
                            </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="container bg-light rounded ">
            <div class="card-columns rounded p-3 blog_data">

            </div>
        </div>

        <div hidden>
            @if(!empty($max_id))
                <p id="max_blog">{{ $max_id }}</p>
            @endif
        </div>
        <div class="form-group col-md-12 mb-3 d-flex align-items-center">
            <a href="#?" class="btn btn-theme-sm mx-auto text-capitalize font-weight-bold px-5 mb-4" id="load_more" >Load More</a>
        </div>
    </section>


@endsection

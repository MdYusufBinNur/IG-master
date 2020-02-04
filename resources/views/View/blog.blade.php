@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-blog"></i> blog</h2>
    </section>


    <!--Masonry Grid of blog-->
    <section class="blog mb-5">
        <div class="container bg-light rounded">
            <div class="card-columns rounded p-3">

                <div class="card border-0 shadow-sm">
                    <img src="https://placeimg.com/640/240/any" class="card-img-top" alt="">
                    <div class="card-body p-2">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                        </p>
                        <a href="#" class="btn btn-theme-sm text-white text-capitalize">Read more</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <img src="https://placeimg.com/640/240/any" class="card-img-top" alt="">
                    <div class="card-body p-2">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                        </p>
                        <a href="#" class="btn btn-theme-sm text-white text-capitalize">Read more</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <img src="https://placeimg.com/640/240/any" class="card-img-top" alt="">
                    <div class="card-body p-2">
                        <h5 class="card-title font-weight-bold">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                        </p>
                        <a href="#" class="btn btn-theme-sm text-white text-capitalize">Read more</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>


            </div>


            <div class="form-group col-md-12 mb-3 d-flex align-items-center">
                <a href="#" class="btn btn-theme-sm mx-auto text-capitalize font-weight-bold px-5 mb-4">Load More</a>
            </div>


        </div>
    </section>


@endsection

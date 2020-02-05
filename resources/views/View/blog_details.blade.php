@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-blog"></i> blog
            details</h2>
    </section>

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="https://placeimg.com/1200/340/any" class="img-fluid rounded-top mx-auto d-block" alt="">
                </div>
                <div class="col-12">
                    <h5 class="font-weight-bold display-4 pt-3 pb-3">This is the blog title</h5>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, beatae rerum,
                        quo dolores illum
                        repellat accusantium ex aliquid sed eligendi aperiam veniam? Ducimus quis exercitationem, ex esse
                        eveniet dolores sint!</p>

                </div>
            </div>
        </div>
    </section>

@endsection

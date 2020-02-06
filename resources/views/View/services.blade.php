@extends('View.layout')

@section('page-content')

<section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
  <div class="page-title">
    <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-cogs"></i> services
    </h2>
  </div>
</section>

<section class="services-details mb-5">
  <div class="container">
    <div class="row">

        @if(!empty($services))
            @foreach($services as $service)
                <div class="col-md-6">
                    <div class="media shadow rounded p-3 mt-5">
                        <img class="mr-3" src="{{ $service->service_image }}" alt="Visa Service">
                        <div class="media-body">
                            <h5 class="mt-0 font-weight-bold color-primary text-capitalize">{{ $service->service_title }}</h5>
                            <p class="text-secondary">{{ $service->service_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif


    </div>
  </div>
</section>

@endsection

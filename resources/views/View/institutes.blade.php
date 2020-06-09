@extends('View.layout')

@section('page-content')

<section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
    <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-university"></i>
        institutes</h2>
</section>


<section class="institutes mb-5">
    <div class="container-fluid">
        <div class="card shadow border-0 p-3 list-group-flush">

            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        @if(!empty($countries))
                        @foreach($countries as $key => $country)
                            @if($key == 0)
                                    <a class="list-group-item list-group-item-action active" id="list-country-{{ $key }}" data-toggle="list"
                                       href="#country-{{ $key }}" role="tab" aria-controls="country-1">{{ $country->country_name }}</a>
                                @else
                                    <a class="list-group-item list-group-item-action" id="list-country-{{ $key }}" data-toggle="list"
                                       href="#country-{{ $key }}" role="tab" aria-controls="country-2">{{ $country->country_name }}</a>
                            @endif

                        @endforeach
                        @endif



                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">

                        @if(!empty($countries))
                            @foreach($countries as $key => $country)
                                @if($key == 0)
                                    <div class="tab-pane fade show active" id="country-{{ $key }}" role="tabpanel"
                                         aria-labelledby="list-country-{{ $key }}">
                                        <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                            <span class="text-uppercase font-weight-bold">{{ $country->country_name  }}</span>
                                        </h4>

                                        <ol>
                                            @foreach($country->university as $institute)
                                                <li class="p-1"><a href="{{ $institute->university_link }}" target="_blank"> {{ $institute->university_name }}</a></li>

                                            @endforeach
                                        </ol>
                                    </div>
                                    @else
                                        <div class="tab-pane fade" id="country-{{ $key }}" role="tabpanel" aria-labelledby="list-country-{{ $key }}">
                                            <h4 class="px-4 pb-2"><span class="text-muted text-capitalize">institutes of</span>
                                                <span class="text-uppercase font-weight-bold">{{$country->country_name  }}</span>
                                            </h4>
                                            <ol>
                                                @foreach($country->university as $institute)
                                                    <li class="p-1"><a href="{{ $institute->university_link }}" target="_blank"> {{ $institute->university_name }}</a></li>

                                                @endforeach

                                            </ol>
                                        </div>
                                @endif

                            @endforeach
                        @endif




                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection

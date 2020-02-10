@extends('View.layout')

@section('page-content')

<section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
    <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-flag"></i> countries
    </h2>
</section>


<section class="services-details mb-5">
    @if(!empty($country_details))
    <div class="container">
        <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">{{ $country_details->country_name }} <br><small>at a glance</small></h2>
        <div class="card shadow border-0 p-3">
            <div class="row">
                <div class="col-md-12">
                    {!! $country_details->at_a_glance !!}
                </div>
            </div>
        </div>
    </div>
    @endif
</section>




<section class="services-procedures mb-5">
    @if(!empty($country_details))
        <div class="container">
            <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">Procedure <br><small>for {{ $country_details->country_name }}</small>
            </h2>

            <div class="card shadow border-0 p-3 list-group-flush">
                @if(count($country_details->procedure) > 0)
                    @foreach($country_details->procedure as $procedure)
                        <div class="procedure-steps list-group-item">
                            <p class="step-details">{!! $procedure->description !!}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    @endif
</section>


<!--Masonry Grid of Success stories-->
<section class="success-stories mb-5">
    @if(!empty($country_details))
        <div class="container">
            <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">Success stories<br><small>of
                    {{ $country_details->country_name }} students</small>
            </h2>

            <div class="card-columns shadow border-0 p-3">
                @if(count($country_details->story) > 0)
                    @foreach($country_details->story  as $story)
                        <div class="card bg-dark text-white text-justify p-1">
                            <div class="card-body">
                                <h5 class="card-title">{{$story->title}}</h5>
                                <p class="card-text">{!! $story->description !!}</p>
                                <footer class="blockquote-footer text-white">
                                    <small>
                                        Someone famous in <cite title="Source Title">{{ $story->source }}</cite>
                                    </small>
                                </footer>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>
    @endif
</section>



@endsection

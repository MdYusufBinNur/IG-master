@extends('View.layout')

@section('page-content')

<section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
    <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-flag"></i> countries
    </h2>
</section>


<section class="country-details mb-5">
    @if(!empty($country_details))
    <div class="container">
        <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">{{ $country_details->country_name }} <br><small>at a glance</small></h2>
        <div class="card shadow border-0 p-3 list-group-flush">
            <div class="row">
                <div class="col-sm-12">
                   <p  class="step-details"> {!! $country_details->at_a_glance !!}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>



@if(!empty($country_details))
<section class="services-procedures mb-5">

        <div class="container">
            <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">Procedure <br><small>for {{ $country_details->country_name }}</small>
            </h2>

            <div class="card shadow border-0 p-3 list-group-flush">

                <div class="row">
                    <div class="col-sm-6">
                        @if(count($country_details->procedure) > 0)
                            @foreach($country_details->procedure as $procedure)

                                <div class="procedure-steps list-group-item">
                                    <p class="step-details">{!! $procedure->description !!}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-sm-6">
                        @if(count($country_details->procedure) > 0)
                            @foreach($country_details->procedure as $procedure)
                                <div class="procedure-steps list-group-item">
                                    <figure class="">
                                        <img src="{{ asset($procedure->country_map_image) }}" class="rounded" width="100%" alt="">
                                    </figure>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>

</section>
@endif

<!--Masonry Grid of Success stories-->

@if(!empty($country_details))
<section class="success-stories mb-5">
     <div class="container">
            <h2 class="text-left text-uppercase font-weight-bold color-primary">Success stories<br><small>of
                    {{ $country_details->country_name }} students</small>
            </h2>
             <div class="row p-2">
                 <div class="owl-carousel d-flex" id="story-carousel">
                 @if(count($country_details->story) > 0)
                     @foreach($country_details->story  as $story)
                             <div class="card bg-dark text-white text-justify p-1">
                                 <div class="card-body">
                                     <h5 class="card-title">{{$story->title}}</h5>
                                     <p class="card-text">{!! $story->description !!}</p>
                                     <footer class="blockquote-footer text-white">
                                         <small>
                                             <cite title="Source Title">{{ $story->source }}</cite>
                                         </small>
                                     </footer>
                                 </div>
                             </div>

                     @endforeach

                 @endif
             </div>
         </div>

        </div>
</section>
@endif


@endsection

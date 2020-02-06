@extends('View.layout')

@section('page-content')

<!--Masonry Grid of Success stories-->
<section class="success-stories mb-5">
    <div class="container">
        @if(!empty($countries))
        @foreach($countries as $country)
                @if(count($country->story) > 0)
                <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">Success stories<br><small>of
                        {{ $country->country_name }} students</small></h2>
                <div class="card-columns bg-light rounded p-3">

                    @foreach($country->story as $story)
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset($story->story_image) }}"  width="250" height="auto" class="card-img-top" alt="">
                        <div class="card-body p-2">
                            <h5 class="card-title font-weight-bold">{{ $story->title }}</h5>
                            <p class="card-text">{!! $story->description !!}
                            </p>
                        </div>
                    </div>

                    @endforeach

                </div>
                @endif
        @endforeach
        @endif

    </div>
</section>


@endsection

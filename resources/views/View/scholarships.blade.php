@extends('View.layout')

@section('page-content')

<!--Masonry Grid of Success stories-->
<section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
    <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-blog"></i> Scholarships</h2>
</section>
<section class="success-stories mb-5">
    <div class="container-fluid">
        <div class="row">
            @if(!empty($processes))
                @foreach($processes as $scholarship)

                    <div class="col-md-12">
                        <p  style="font-family: 'Times New Roman',sans-serif">{!! $scholarship->apply_details !!}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<section class="success-stories mb-5">
    <h2 class="display-5 text-uppercase text-center color-primary mb-5">{{ "International Student Scholarships information page" }}</h2>
    <div class="container-fluid">
        <div class="row">
            @if(!empty($scholarships))
                @foreach($scholarships as $scholarship)
                    <div class="col-md-12">
                        <h2 style="font-family: 'Times New Roman',sans-serif">{{ $scholarship->scholarship_title }}</h2>
                    </div>
                    <div class="col-md-12">
                        <p  style="font-family: 'Times New Roman',sans-serif">{!! $scholarship->scholarship_description !!}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<section id="" class="my-5">
    <h1 class="display-5 text-uppercase text-center color-primary mb-5">{{ "Apply Now For Scholarship" }}</h1>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2 text-center mt-1">
                <a class="btn btn-call text-white" href="{{ url('req_call_back') }}">Request For A Call &nbsp; <i class="fas fa-phone"></i></a>

            </div>
            <div class="col-md-2 text-center mt-1">
                <a href="{{ url('book_an_appointment') }}" class="btn btn-book text-white">Book Appointment &nbsp; <i class="fas fa-calendar"></i></a>

            </div>
        </div>
    </div>
</section>



@endsection

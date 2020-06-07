@extends('View.layout')
@section('page-content')

    <!-- Slider Section -->
    <section>
        <div id="slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @if(!empty($sliders))
                    @foreach($sliders as $key => $slider)
                        @if($key == 1)
                            <div class="carousel-item active">
                                <img src="{{ asset($slider->slider_image) }}" class="img-fluid" alt="Slider 2">
                            </div>
                        @endif
                        <div class="carousel-item">
                            <img src="{{ asset($slider->slider_image) }}" class="img-fluid" alt="Slider 2">
                        </div>

                    @endforeach
                @endif


            </div>
            <!--First Slider Overlay-->
            <div class="w-100 h-100 position-absolute slider-overlay">
                <div class="row h-100 d-flex align-items-center">
                    <div class="col-10 h-auto col-md-4 offset-1">
                        <div class="text-light slider-course-finder w-100 h-100 p-1 rounded shadow">
                            <h4 class="text-uppercase text-center">Find a course!</h4>
                            <form class="slider-form" action="{{url('get_courses_details')}}" method="post">

                                @csrf()
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="find_country">Country</label>
                                        <select name="find_country" id="find_country"
                                                class="form-control form-control-sm">

                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="find_university">University</label>
                                        <select name="find_university" id="find_university"
                                                class="form-control form-control-sm">
                                            <option selected>Select University</option>
                                            <option>Northumbria University</option>
                                            <option>Loading more...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="find_program">Program</label>
                                        <select name="find_program" id="find_program"
                                                class="form-control form-control-sm">

                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="find_course">Course</label>
                                        <select name="find_course" id="find_course"
                                                class="form-control form-control-sm" required>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group col">
                                        <button type="submit"
                                                class="btn btn-sm btn-success text-uppercase text-light w-100">find <i
                                                class="fas fa-search"></i></button>
                                    </div>
                                    <div class="form-group col">
                                        <button type="reset"
                                                class="btn btn-sm btn-danger text-uppercase text-light w-100">reset <i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="{{ asset('View/img/home-about.png') }}" alt="background"
                 class="d-none d-md-block img-fluid bg-img-about position-absolute"/>
            <!-- About Section -->
            <section id="about" class="d-none d-md-flex mt-md-5 pt-md-5 w-100 vh-100 align-items-md-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-5 text-center text-md-left">
                            <h2 class="display-4 text-uppercase color-primary">About us</h2>
                            @if(!empty($about))
                                <p class="text-md-justify my-5 text-justify">{!! substr($about->about_description,0,451) !!}</p>
                            @endif

                            <a href="{{route('view_about')}}" class="btn btn-lg btn-theme text-uppercase text-light">more <i
                                    class="fas fa-chevron-right"></i> </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="d-flex d-md-none mt-md-5 pt-md-5 w-100 d-flex align-items-md-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-5 text-center text-md-left">
                            <h2 class="display-4 text-uppercase color-primary">About us</h2>
                            @if(!empty($about))
                                <p class="text-md-justify my-5 text-justify">{!! substr($about->about_description,0,451) !!}</p>
                            @endif
                            <a href="{{route('view_about')}}" class="btn btn-lg btn-theme text-uppercase text-light">more <i
                                    class="fas fa-chevron-right"></i> </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services Grid -->
            <section id="services">
                <h2 class="display-4 text-uppercase text-center color-primary mb-5">services</h2>
                {{--<div class="container">
                    <div class="row justify-content-between">

                        @if(!empty($services))
                            @foreach($services as $service)
                                <div class="col-12 col-md-3 text-center p-2">
                                    <div
                                        class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-3">
                                                <img src="{{ asset($service->service_image) }}" class="img-fluid"
                                                     alt="Visa Services"/>
                                            </div>
                                        </div>
                                        <h3 class="color-primary text-uppercase py-3">{{ $service->service_title }}</h3>
                                        <p class="text-justify">{{ $service->service_description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    </div>
                </div>--}}
                <div class="container">
                    <div class="row pt-5 text-center">
                        @if(!empty($services))
                            @foreach($services as $service)
                                <div class="col-sm-12 col-md-3 col-lg-3 p-3 text-center ">
                                    <div class="card shadow w-100 h-100 border-0 text-center">
                                        <h3 class="text-center">
                                            <img src="{{ asset($service->service_image) }}"
                                                 class="text-center object-cover p-2" width="100" height="auto">
                                        </h3>
                                        <h3 class="color-primary text-uppercase p-3">{{ $service->service_title }}</h3>
                                        <p class="text-justify p-2">{{ $service->service_description }}</p>

                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </section>
            <!-- Solution -->
            <section id="" class="py-5">
                <h2 class="display-4 color-primary text-uppercase text-center">Solution for Higher Studies</h2>
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-sm-12 col-md-3 col-lg-3 p-3">
                            <div class="card shadow w-100 h-100 border-0 ">
                                <a href="{{ url('find_universities') }}" style="text-decoration:none">
                                    <img src="{{ asset('View/img/uni.png') }}"
                                         class="card-img-top object-cover">

                                    <p class="text-center text-uppercase text-dark mt-2">Find A
                                        University</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 p-3">
                            <div class="card shadow w-100 h-100 border-0 ">
                                <a href="{{ url('find_courses') }}" style="text-decoration:none">
                                    <img src="{{ asset('View/img/course.png') }}"
                                         class="card-img-top object-cover">

                                    <p class="text-center text-uppercase text-dark mt-2">Find A
                                        Course</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 p-3">
                            <div class="card shadow w-100 h-100 border-0 ">
                                <a href="{{ url('find_scholarships') }}" style="text-decoration:none">
                                    <img src="{{ asset('View/img/scholarship.png') }}"
                                         class="card-img-top object-cover">

                                    <p class="text-center text-uppercase text-dark mt-2">Find A
                                        Scholarship</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 p-3">
                            <div class="card shadow w-100 h-100 border-0 ">
                                <a href="{{ url('view_apply') }}" style="text-decoration:none">
                                    <img src="{{ asset('View/img/application.png') }}"
                                         class="card-img-top object-cover">

                                    <p class="text-center text-uppercase text-dark mt-2">Application Process</p>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Countries Grid -->
            <section id="countries" class="mt-5 bg-light">
                <h2 class="display-4 color-primary text-uppercase text-center mb-5 pt-3">countries</h2>
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-12 col-md-10 mx-auto d-flex">
                            <div id="country-carousel" class="owl-carousel p-2 d-flex">

                                @if(!empty($countries))
                                    @foreach($countries as $country)
                                        <div class="card align-items-center justify-content-center row d-flex border-0">
                                            <a href="#" class="text-decoration-none">
                                                <img src="{{ asset($country->country_image) }}" class="img-fluid"/>
                                                <p class="text-center text-uppercase pt-2 text-dark font-weight-bold">{{ $country->country_name }}</p>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Institutes -->
            <section id="institutes" class="my-5">
                <h2 class="display-4 text-uppercase text-center color-primary mb-5">institutes</h2>
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-12 col-md-10 mx-auto d-flex">
                            <div id="institute-carousel" class="owl-carousel p-2 d-flex">
                                @if(!empty($institutes))
                                    @foreach($institutes as $institute)
                                        <div class="card align-items-center justify-content-center row d-flex border-0 shadow">
                                            <img src="{{ asset($institute->university_image) }}" class="img-fluid" height="100"/>
                                        </div>

                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Numbers Section -->
            <section id="numbers" class="py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-4 col-md-2 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center mb-3">
                            <i class="fas fa-4x fa-user-graduate mb-3"></i>
                            <h3>1000+</h3>
                            <p class="text-capitalize">students served</p>
                        </div>
                        <div
                            class="col-4 col-md-2 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center mb-3">
                            <i class="fas fa-4x fa-map-marked-alt mb-3"></i>
                            <h3>6+</h3>
                            <p class="text-capitalize">study destinations</p>
                        </div>
                        <div
                            class="col-4 col-md-2 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center mb-3">
                            <i class="fas fa-4x fa-globe-europe mb-3"></i>
                            <h3>8+</h3>
                            <p class="text-capitalize">global offices</p>
                        </div>
                        <div
                            class="col-4 col-md-2 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center mb-3">
                            <i class="fas fa-4x fa-book mb-3"></i>
                            <h3>100+</h3>
                            <p class="text-capitalize">courses offered</p>
                        </div>
                        <div
                            class="col-4 col-md-2 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center mb-3">
                            <i class="fas fa-4x fa-building mb-3"></i>
                            <h3>60+</h3>
                            <p class="text-capitalize">partner institutes</p>
                        </div>
                        <div
                            class="col-4 col-md-2 col-lg-2 d-flex flex-column justify-content-center align-items-center text-center mb-3">
                            <i class="fas fa-4x fa-smile-beam mb-3"></i>
                            <h3>97%</h3>
                            <p class="text-capitalize">positive rating</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials -->
            <section id="testimonial" class="my-5">

                <h2 class="text-uppercase text-center color-primary mb-5">testimonials</h2>
                <div class="container">
                    <div class="row">
                        @if(!empty($testimonials))
                            @foreach($testimonials as $testimonial)
                                <div class="col-md-6 mb-3">
                                    <div class="media rounded shadow-sm p-3">
                                        <img src="{{ asset($testimonial->testimonial_image) }}"
                                             class="rounded-circle mr-3"
                                             alt="">
                                        <div class="media-body">
                                            <h5 class="mt-0">{{ $testimonial->testimonial_title }}</h5>
                                            <p class="text-justify text-muted">{{ $testimonial->testimonial_description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </section>
            <!-- Blog -->
            <section id="blog" class="py-5">
                <h2 class="display-4 color-primary text-uppercase text-center">blog</h2>
                <div class="container">
                    <div class="row pt-5">
                        @if(!empty($blogs))
                            @foreach($blogs as $blog)
                                <div class="col-sm-12 col-md-3 col-lg-3 p-3">
                                    <div class="card shadow w-100 h-100 border-0">
                                        <img src="{{ asset($blog->blog_image) }}" class="card-img-top object-cover"/>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $blog->blog_title }}</h5>
                                            <p class="card-text">{!! substr($blog->blog_description,0,150) !!}...</p>


                                            <a href="{{ url('get_blog_details/').'/'.$blog->id }}"
                                               class="btn btn-theme-sm text-white text-center text-capitalize text-center">read
                                                more ..</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                        <div class="col-12 d-flex justify-content-center mt-3">
                            <a href="{{ url('view_blog') }}" class="btn btn-lg btn-theme text-light text-uppercase">all
                                posts <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Form -->
            <section id="contact" class="py-5">
                <h2 class="display-4 color-primary text-uppercase text-center">contact</h2>
                <div class="container pt-3">
                    <form class="row" action="{{ '/send_message' }}" method="post">
                        @csrf()
                        <div class="col-6 form-group">
                            <label for="contact-name">Name</label>
                            <input type="text" id="contact-name" name="name" class="form-control w-100"
                                   placeholder="John Doe" required>
                        </div>
                        <div class="col-6 form-group">
                            <label for="contact-phone">Contact Number</label>
                            <input type="text" id="contact-phone" name="phone" class="form-control w-100"
                                   placeholder="+8801777777777" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="contact-name">Email</label>
                            <input type="email" id="contact-email" name="email" class="form-control w-100"
                                   placeholder="name@domain.com" required>
                        </div>
                        <div class="col-12 form-group">
                            <label for="contact-message">Message</label>
                            <textarea class="form-control w-100" name="message" id="contact-message"
                                      placeholder="Your Message Here..." rows="5" required></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-lg btn-theme mt-3 text-light text-uppercase">send
                                message
                            </button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Footer -->
        </div>

    </section>

    <!-- Inside Background (About, Numbers, Services) -->

@endsection

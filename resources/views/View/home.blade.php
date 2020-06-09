{{--@extends('View.layout')--}}

{{--@section('page-content')--}}
{{--    <!-- Slider Section -->--}}
{{--    <div id="slider" class="carousel slide" data-ride="carousel">--}}
{{--        <!--<ol class="carousel-indicators">--}}
{{--            <li data-target="#slider" data-slide-to="0" class="active"></li>--}}
{{--        </ol>-->--}}
{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img src="{{ asset('View/img/slider2.jpg') }}" class="d-block w-100" alt="Slider 2">--}}
{{--                <div class="w-100 h-100 position-absolute slider-overlay">--}}
{{--                    <div class="row h-100 d-flex align-items-center">--}}
{{--                        <div class="col-10 h-auto col-md-4 offset-1">--}}
{{--                            <div class="text-light slider-course-finder w-100 h-100 p-5 rounded shadow">--}}
{{--                                <h3 class="text-uppercase text-center">Find a course!</h3>--}}
{{--                                <form action="{{route('find-course')}}" method="GET">--}}
{{--                                    <div class="form-row">--}}
{{--                                        <div class="form-group col">--}}
{{--                                            <label for="find-course-country">Country</label>--}}
{{--                                            <select name="find-course-country" id="find-course-country" class="form-control">--}}
{{--                                                <option selected>Any</option>--}}
{{--                                                <option>UK</option>--}}
{{--                                                <option>USA</option>--}}
{{--                                                <option>Canada</option>--}}
{{--                                                <option>Australia</option>--}}
{{--                                                <option>New Zealand</option>--}}
{{--                                                <option>Ireland</option>--}}
{{--                                                <option>Netherland</option>--}}
{{--                                                <option>Sweden</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col">--}}
{{--                                            <label for="find-course-university">University</label>--}}
{{--                                            <select name="find-course-university" id="find-course-university" class="form-control">--}}
{{--                                                <option selected>Any</option>--}}
{{--                                                <option>Northumbria University</option>--}}
{{--                                                <option>Loading more...</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-row">--}}
{{--                                        <div class="form-group col">--}}
{{--                                            <label for="find-course-program">Program</label>--}}
{{--                                            <select name="find-course-program" id="find-course-program" class="form-control">--}}
{{--                                                <option selected>Any</option>--}}
{{--                                                <option>Undergraduate</option>--}}
{{--                                                <option>Masters/Post Graduation</option>--}}
{{--                                                <option>Ph.D</option>--}}
{{--                                                <option>D.B.A</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col">--}}
{{--                                            <label for="find-course-course">Course</label>--}}
{{--                                            <select name="find-course-course" id="find-course-course" class="form-control">--}}
{{--                                                <option selected>Any</option>--}}
{{--                                                <option>Computer Science</option>--}}
{{--                                                <option>Software Engineering</option>--}}
{{--                                                <option>Accounting</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-row mt-3">--}}
{{--                                        <div class="form-group col">--}}
{{--                                            <button type="submit" class="btn btn-md btn-success text-uppercase text-light w-100">find  <i class="fas fa-search"></i></button>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col">--}}
{{--                                            <button type="reset" class="btn btn-danger text-uppercase text-light w-100">reset  <i class="fas fa-times"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="carousel-item">--}}
{{--                <img src="{{ asset('View/img/silder.jpg') }}" class="d-block w-100" alt="">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="{{ asset('View/img/silder2.jpg') }}" class="d-block w-100" alt="">--}}
{{--            </div>--}}

{{--        </div>--}}







{{--        <!--<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>-->--}}
{{--    </div>--}}
{{--<!-- Inside Background (About, Numbers, Services) -->--}}
{{--<div>--}}
{{--    <img src="img/home-about.png" alt="background" class="d-none d-md-block img-fluid bg-img-about position-absolute"/>--}}
{{--    <!-- About Section -->--}}
{{--    <section id="about" class="d-none d-md-flex mt-md-5 pt-md-5 w-100 vh-100 align-items-md-center">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-md-5 text-center text-md-left">--}}
{{--                    <h2 class="display-4 text-uppercase color-primary">about us</h2>--}}
{{--                    <p class="text-md-justify my-5">To pursue higher education abroad, the students need relevant qualifications and experts to help support processing their applications from start to finish. Choosing the right consultant is not an easy task to do. IG Education Ltd is working for building trust, accomplishing goals and has been successful throughout in recruiting international students globally. We believe in providing excellent services to the students and to our partner institutes.</p>--}}
{{--                    <a href="{{route('about')}}" class="btn btn-lg btn-theme text-uppercase text-light">more <i class="fas fa-chevron-right"></i> </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section id="about" class="d-flex d-md-none mt-md-5 pt-md-5 w-100 d-flex align-items-md-center">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-md-5 text-center text-md-left">--}}
{{--                    <h2 class="display-4 text-uppercase color-primary">about us</h2>--}}
{{--                    <p class="text-md-justify my-5">To pursue higher education abroad, the students need relevant qualifications and experts to help support processing their applications from start to finish. Choosing the right consultant is not an easy task to do. IG Education Ltd is working for building trust, accomplishing goals and has been successful throughout in recruiting international students globally. We believe in providing excellent services to the students and to our partner institutes.</p>--}}
{{--                    <a href="{{route('about')}}" class="btn btn-lg btn-theme text-uppercase text-light">more <i class="fas fa-chevron-right"></i> </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Numbers Section -->--}}
{{--    <section id="numbers" class="py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-2 d-flex flex-column justify-content-center align-items-center">--}}
{{--                    <i class="fas fa-4x fa-user-graduate mb-3"></i>--}}
{{--                    <h3>1000+</h3>--}}
{{--                    <p class="text-capitalize">students served</p>--}}
{{--                </div>--}}
{{--                <div class="col-2 d-flex flex-column justify-content-center align-items-center">--}}
{{--                    <i class="fas fa-4x fa-map-marked-alt mb-3"></i>--}}
{{--                    <h3>6+</h3>--}}
{{--                    <p class="text-capitalize">study destinations</p>--}}
{{--                </div>--}}
{{--                <div class="col-2 d-flex flex-column justify-content-center align-items-center">--}}
{{--                    <i class="fas fa-4x fa-globe-europe mb-3"></i>--}}
{{--                    <h3>8+</h3>--}}
{{--                    <p class="text-capitalize">global offices</p>--}}
{{--                </div>--}}
{{--                <div class="col-2 d-flex flex-column justify-content-center align-items-center">--}}
{{--                    <i class="fas fa-4x fa-book mb-3"></i>--}}
{{--                    <h3>100+</h3>--}}
{{--                    <p class="text-capitalize">courses offered</p>--}}
{{--                </div>--}}
{{--                <div class="col-2 d-flex flex-column justify-content-center align-items-center">--}}
{{--                    <i class="fas fa-4x fa-building mb-3"></i>--}}
{{--                    <h3>60+</h3>--}}
{{--                    <p class="text-capitalize">partner institutes</p>--}}
{{--                </div>--}}
{{--                <div class="col-2 d-flex flex-column justify-content-center align-items-center">--}}
{{--                    <i class="fas fa-4x fa-smile-beam mb-3"></i>--}}
{{--                    <h3>97%</h3>--}}
{{--                    <p class="text-capitalize">positive rating</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Services Grid -->--}}
{{--    <section id="services" class="mt-5">--}}
{{--        <h2 class="display-4 text-uppercase text-center color-primary mb-5">services</h2>--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-between">--}}
{{--                <div class="col-12 col-md-4 text-center p-3">--}}
{{--                    <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-4">--}}
{{--                                <img src="img/visa.png" class="img-fluid" alt="Visa Services" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h3 class="color-primary text-uppercase py-3">visa services</h3>--}}
{{--                        <p>Inspiren Global Education Ltd. offers visa processing services to the selected countries where our affiliated institutes are located.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-4 text-center p-3">--}}
{{--                    <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-4">--}}
{{--                                <img src="img/assessment.png" class="img-fluid" alt="Free Assessment" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h3 class="color-primary text-uppercase py-3">free assessment</h3>--}}
{{--                        <p>Inspiren Global Education Ltd. offers free assessment program to evaluate you and find the perfect institute and course according to your needs.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-4 text-center p-3">--}}
{{--                    <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-4">--}}
{{--                                <img src="img/airport.png" class="img-fluid" alt="Airport Pickup" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h3 class="color-primary text-uppercase py-3">airport pickup</h3>--}}
{{--                        <p>Inspiren Global Education Ltd. offers Airport Pickup service to those students who processed visa through us.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-4 text-center p-3">--}}
{{--                    <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-4">--}}
{{--                                <img src="img/accommodation.png" class="img-fluid" alt="Accommodation Services" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h3 class="color-primary text-uppercase py-3">accommodation services</h3>--}}
{{--                        <p>Inspiren Global Education Ltd. offers accommodation support to those selected countries where affiliate institutes are located.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-4 text-center p-3">--}}
{{--                    <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-4">--}}
{{--                                <img src="img/travel.png" class="img-fluid" alt="Student Travel Card" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h3 class="color-primary text-uppercase py-3">student travel card</h3>--}}
{{--                        <p>Inspiren Global Education Ltd. help students to get Student Travel Card and Enjoy student discounts in the selected transportation systems and locations.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-4 text-center p-3">--}}
{{--                    <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">--}}
{{--                        <div class="row d-flex justify-content-center">--}}
{{--                            <div class="col-4">--}}
{{--                                <img src="img/bank.png" class="img-fluid" alt="Student Banking" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h3 class="color-primary text-uppercase py-3">student banking</h3>--}}
{{--                        <p>Inspiren Global Education Ltd. helps students to open student bank accounts to save their money and enjoy other banking facilities in selected countries or territories.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</div>--}}
{{--    <!-- Destinations Grid -->--}}
{{--    <section id="countries" class="mt-5">--}}
{{--        <h2 class="display-4 text-uppercase text-center color-primary mb-5">countries</h2>--}}
{{--        <div class="d-block countries-grids">--}}
{{--            <div class="w-15 float-left">--}}
{{--                <img src="img/countries/uk.jpg" alt="UK" class="img-fluid rounded-lg" />--}}
{{--                <div class="countries-overlay position-relative rounded-lg d-flex justify-content-center align-items-center">--}}
{{--                    <h2 class="text-light text-center text-uppercase display-5">uk</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-15 float-left">--}}
{{--                <img src="img/countries/usa.jpg" alt="USA" class="img-fluid rounded-lg" />--}}
{{--                <div class="countries-overlay position-relative rounded-lg d-flex justify-content-center align-items-center">--}}
{{--                    <h2 class="text-light text-center text-uppercase display-5">USA</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-15 float-left">--}}
{{--                <img src="img/countries/canada.jpg" alt="Canada" class="img-fluid rounded-lg" />--}}
{{--                <div class="countries-overlay position-relative rounded-lg d-flex justify-content-center align-items-center">--}}
{{--                    <h2 class="text-light text-center text-uppercase display-5">canada</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-15 float-left">--}}
{{--                <img src="img/countries/australia.jpg" alt="Australia" class="img-fluid rounded-lg" />--}}
{{--                <div class="countries-overlay position-relative rounded-lg d-flex justify-content-center align-items-center">--}}
{{--                    <h2 class="text-light text-center text-uppercase display-5">australia</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="w-15 float-left">--}}
{{--                <img src="img/countries/netherland.jpg" alt="Netherland" class="img-fluid rounded-lg" />--}}
{{--                <div class="countries-overlay position-relative rounded-lg d-flex justify-content-center align-items-center">--}}
{{--                    <h2 class="text-light text-center text-uppercase display-5">netherland</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="d-block text-center mt-4">--}}
{{--            <a href="{{route('countries')}}" class="btn btn-lg btn-theme text-light text-uppercase">all countries <i class="fas fa-chevron-right"></i></a>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Institutes -->--}}
{{--    <section id="institutes" class="my-5">--}}
{{--        <h2 class="display-4 text-uppercase text-center color-primary mb-5">institutes</h2>--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-2 text-center">--}}
{{--                    <img src="img/institutes/1.jpg" class="img-fluid" />--}}
{{--                </div>--}}
{{--                <div class="col-2 text-center">--}}
{{--                    <img src="img/institutes/2.jpg" class="img-fluid" />--}}
{{--                </div>--}}
{{--                <div class="col-2 text-center">--}}
{{--                    <img src="img/institutes/3.jpg" class="img-fluid" />--}}
{{--                </div>--}}
{{--                <div class="col-2 text-center">--}}
{{--                    <img src="img/institutes/4.jpg" class="img-fluid" />--}}
{{--                </div>--}}
{{--                <div class="col-2 text-center">--}}
{{--                    <img src="img/institutes/5.jpg" class="img-fluid" />--}}
{{--                </div>--}}
{{--                <div class="col-2 text-center">--}}
{{--                    <img src="img/institutes/6.jpg" class="img-fluid" />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Testimonials -->--}}
{{--    <section id="testimonial" class="my-5">--}}
{{--        <h2 class="display-4 text-uppercase text-center color-primary mb-5">testimonials</h2>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="w-100 h-100 shadow rounded d-flex justify-content-between p-5">--}}
{{--                        <i class="fas fa-users fa-4x mr-5"></i>--}}
{{--                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut hic iste iure maiores modi natus officiis praesentium sint ut voluptates. Asperiores dolor doloremque dolorum eos labore necessitatibus, placeat ullam voluptatum?</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col offset-1">--}}
{{--                    <div class="w-100 h-100 shadow rounded d-flex justify-content-between p-5">--}}
{{--                        <i class="fas fa-users fa-4x mr-5"></i>--}}
{{--                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque aut blanditiis consequuntur eius eveniet fuga laboriosam magnam nisi nobis odit, perferendis porro possimus quam repellendus sapiente tenetur vel veniam!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Blog -->--}}
{{--    <section id="blog" class="py-5">--}}
{{--        <h2 class="display-4 color-primary text-uppercase text-center">blog</h2>--}}
{{--        <div class="container">--}}
{{--            <div class="row pt-5">--}}
{{--                <div class="col-3 p-3">--}}
{{--                    <div class="card shadow w-100 h-100">--}}
{{--                        <img src="img/noimage.jpg" class="card-img-top object-cover" />--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Blog Heading 1</h5>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor error, exercitationem impedit incidunt ipsum itaque non quasi quia voluptatum. Assumenda aut dicta ducimus earum facilis minus, non quis voluptates?</p>--}}
{{--                            <a href="/blog/1" class="btn btn-outline-dark text-uppercase">read more <i class="fas fa-chevron-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 p-3">--}}
{{--                    <div class="card shadow w-100 h-100">--}}
{{--                        <img src="img/noimage.jpg" class="card-img-top object-cover" />--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Blog Heading 2</h5>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor error, exercitationem impedit incidunt ipsum itaque non quasi quia voluptatum. Assumenda aut dicta ducimus earum facilis minus, non quis voluptates?</p>--}}
{{--                            <a href="/blog/2" class="btn btn-outline-dark text-uppercase">read more <i class="fas fa-chevron-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 p-3">--}}
{{--                    <div class="card shadow w-100 h-100">--}}
{{--                        <img src="img/noimage.jpg" class="card-img-top object-cover" />--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Blog Heading 3</h5>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor error, exercitationem impedit incidunt ipsum itaque non quasi quia voluptatum. Assumenda aut dicta ducimus earum facilis minus, non quis voluptates?</p>--}}
{{--                            <a href="/blog/3" class="btn btn-outline-dark text-uppercase">read more <i class="fas fa-chevron-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 p-3">--}}
{{--                    <div class="card shadow w-100 h-100">--}}
{{--                        <img src="img/noimage.jpg" class="card-img-top object-cover" />--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Blog Heading 4</h5>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor error, exercitationem impedit incidunt ipsum itaque non quasi quia voluptatum. Assumenda aut dicta ducimus earum facilis minus, non quis voluptates?</p>--}}
{{--                            <a href="/blog/4" class="btn btn-outline-dark text-uppercase">read more <i class="fas fa-chevron-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 d-flex justify-content-center mt-3">--}}
{{--                    <a href="#" class="btn btn-lg btn-theme text-light text-uppercase">all posts <i class="fas fa-chevron-right"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Contact Form -->--}}
{{--    <section id="contact" class="py-5">--}}
{{--        <h2 class="display-4 color-primary text-uppercase text-center"></h2>--}}
{{--    </section>--}}
{{--    <!-- Footer -->--}}
{{--    <footer>--}}

{{--    </footer>--}}

{{--@endsection--}}

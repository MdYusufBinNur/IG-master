@extends('View.layout')
@section('page-content')
    <!-- Slider Section -->


    <section>
        <div id="slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('View/img/slider2.jpg') }}" class="img-fluid" alt="Slider 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('View/img/slider.jpg') }}" class="img-fluid" alt="Slider 2">
                </div>
            </div>

            <!--First Slider Overlay-->
            <div class="w-100 h-100 position-absolute slider-overlay">
                <div class="row h-100 d-flex align-items-center">
                    <div class="col-10 h-auto col-md-4 offset-1">
                        <div class="text-light slider-course-finder w-100 h-100 p-1 rounded shadow">
                            <h4 class="text-uppercase text-center">Find a course!</h4>
                            <form class="slider-form" action="{{route('view_find-course')}}" method="GET">
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
                                            <option selected>Select Program</option>
                                            <option>Undergraduate</option>
                                            <option>Masters/Post Graduation</option>
                                            <option>Ph.D</option>
                                            <option>D.B.A</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="find_course">Course</label>
                                        <select name="find_course" id="find_course"
                                                class="form-control form-control-sm">
                                            <option selected>Select Course</option>
                                            <option>Computer Science</option>
                                            <option>Software Engineering</option>
                                            <option>Accounting</option>
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
    </section>
    <!-- Inside Background (About, Numbers, Services) -->
    <div>
        <img src="{{ asset('View/img/home-about.png') }}" alt="background" class="d-none d-md-block img-fluid bg-img-about position-absolute" />
        <!-- About Section -->
        <section id="about" class="d-none d-md-flex mt-md-5 pt-md-5 w-100 vh-100 align-items-md-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 text-center text-md-left">
                        <h2 class="display-4 text-uppercase color-primary">about us</h2>
                        <p class="text-md-justify my-5">To pursue higher education abroad, the students need relevant
                            qualifications and experts to help support processing their applications from start to finish.
                            Choosing the right consultant is not an easy task to do. IG Education Ltd is working for
                            building trust, accomplishing goals and has been successful throughout in recruiting
                            international students globally. We believe in providing excellent services to the students and
                            to our partner institutes.</p>
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
                        <h2 class="display-4 text-uppercase color-primary">about us</h2>
                        <p class="text-md-justify my-5">To pursue higher education abroad, the students need relevant
                            qualifications and experts to help support processing their applications from start to finish.
                            Choosing the right consultant is not an easy task to do. IG Education Ltd is working for
                            building trust, accomplishing goals and has been successful throughout in recruiting
                            international students globally. We believe in providing excellent services to the students and
                            to our partner institutes.</p>
                        <a href="{{route('view_about')}}" class="btn btn-lg btn-theme text-uppercase text-light">more <i
                                class="fas fa-chevron-right"></i> </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Grid -->
        <section id="services">
            <h2 class="display-4 text-uppercase text-center color-primary mb-5">services</h2>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-4 text-center p-3">
                        <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">
                            <div class="row d-flex justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('View/img/visa.png') }}" class="img-fluid" alt="Visa Services" />
                                </div>
                            </div>
                            <h3 class="color-primary text-uppercase py-3">visa services</h3>
                            <p>Inspiren Global Education Ltd. offers visa processing services to the selected countries
                                where our affiliated institutes are located.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center p-3">
                        <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">
                            <div class="row d-flex justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('View/img/assessment.png') }}" class="img-fluid" alt="Free Assessment" />
                                </div>
                            </div>
                            <h3 class="color-primary text-uppercase py-3">free assessment</h3>
                            <p>Inspiren Global Education Ltd. offers free assessment program to evaluate you and find the
                                perfect institute and course according to your needs.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center p-3">
                        <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">
                            <div class="row d-flex justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('View/img/airport.png') }}" class="img-fluid" alt="Airport Pickup" />
                                </div>
                            </div>
                            <h3 class="color-primary text-uppercase py-3">airport pickup</h3>
                            <p>Inspiren Global Education Ltd. offers Airport Pickup service to those students who processed
                                visa through us.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center p-3">
                        <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">
                            <div class="row d-flex justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('View/img/accommodation.png') }}" class="img-fluid" alt="Accommodation Services" />
                                </div>
                            </div>
                            <h3 class="color-primary text-uppercase py-3">accommodation services</h3>
                            <p>Inspiren Global Education Ltd. offers accommodation support to those selected countries where
                                affiliate institutes are located.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center p-3">
                        <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">
                            <div class="row d-flex justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('View/img/travel.png') }}" class="img-fluid" alt="Student Travel Card" />
                                </div>
                            </div>
                            <h3 class="color-primary text-uppercase py-3">student travel card</h3>
                            <p>Inspiren Global Education Ltd. help students to get Student Travel Card and Enjoy student
                                discounts in the selected transportation systems and locations.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center p-3">
                        <div class="p-3 w-100 h-100 shadow rounded d-flex flex-column justify-content-center bg-white">
                            <div class="row d-flex justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('View/img/bank.png') }}" class="img-fluid" alt="Student Banking" />
                                </div>
                            </div>
                            <h3 class="color-primary text-uppercase py-3">student banking</h3>
                            <p>Inspiren Global Education Ltd. helps students to open student bank accounts to save their
                                money and enjoy other banking facilities in selected countries or territories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Destinations Grid -->

    <section id="countries" class="mt-5 bg-light">
        <h2 class="display-4 color-primary text-uppercase text-center mb-5 pt-3">countries</h2>

        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-12 col-md-10 mx-auto d-flex">
                    <div id="country-carousel" class="owl-carousel p-2 d-flex">

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('View/img/countries/uk.jpg') }}" class="img-fluid" />
                                <p class="text-center text-uppercase pt-2 text-dark font-weight-bold">Australia</p>
                            </a>
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('View/img/countries/usa.jpg') }}" class="img-fluid" />
                                <p class="text-center text-uppercase pt-2 text-dark font-weight-bold">canada</p>
                            </a>
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('View/img/countries/canada.jpg') }}" class="img-fluid" />
                                <p class="text-center text-uppercase pt-2 text-dark font-weight-bold">ireland</p>
                            </a>
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <a href="#" class="text-decoration-none">
                                <img  src="{{ asset('View/img/countries/australia.jpg') }}" class="img-fluid" />
                                <p class="text-center text-uppercase pt-2 text-dark font-weight-bold">netherland</p>
                            </a>
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('View/img/countries/netherland.jpg') }}" class="img-fluid" />
                                <p class="text-center text-uppercase pt-2 text-dark font-weight-bold">sweden</p>
                            </a>
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('View/img/countries/netherland.jpg') }}"  class="img-fluid" />
                                <p class="text-center text-uppercase pt-2 text-dark font-weight-bold">UK</p>
                            </a>
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <a href="#" class="text-decoration-none">
                                <img src="{{ asset('View/img/countries/netherland.jpg') }}" class="img-fluid" />
                                <p class="text-center text-uppercase pt-2 text-dark font-weight-bold">usa</p>
                            </a>
                        </div>

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

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <img src="{{ asset('View/img/institutes/1.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <img src="{{ asset('View/img/institutes/2.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <img src="{{ asset('View/img/institutes/3.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <img src="{{ asset('View/img/institutes/4.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <img src="{{ asset('View/img/institutes/5.jpg') }}" class="img-fluid" />
                        </div>

                        <div class="card align-items-center justify-content-center row d-flex border-0">
                            <img src="{{ asset('View/img/institutes/6.jpg') }}" class="img-fluid" />
                        </div>
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
                <div class="col-md-6 mb-3">
                    <div class="media rounded shadow-sm p-3">
                        <img src="https://placeimg.com/64/64/any" class="rounded-circle mr-3" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">MD Muhaiminul Haque (Bangladesh), B.Sc Honors, Bangor University</h5>
                            <p class="text-justify text-muted">IG Education supported me and guided me entire visa
                                application process.
                                I will recommend others to get help for Aspire for Higher Education. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="media rounded shadow-sm p-3">
                        <img src="https://placeimg.com/64/64/any" class="rounded-circle mr-3" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">MD Muhaiminul Haque (Bangladesh), B.Sc Honors, Bangor University</h5>
                            <p class="text-justify text-muted">IG Education supported me and guided me entire visa
                                application process.
                                I will recommend others to get help for Aspire for Higher Education. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section id="blog" class="py-5">
        <h2 class="display-4 color-primary text-uppercase text-center">blog</h2>
        <div class="container">
            <div class="row pt-5">
                <div class="col-6 col-md-3 col-lg-3 p-3">
                    <div class="card shadow w-100 h-100 border-0">
                        <img src="{{ asset('View/img/noimage.jpg') }}" class="card-img-top object-cover" />
                        <div class="card-body">
                            <h5 class="card-title">Blog Heading 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor error,
                                exercitationem impedit incidunt ipsum itaque non quasi quia voluptatum. Assumenda aut dicta
                                ducimus earum facilis minus, non quis voluptates?</p>
                            <a href="/blog/1" class="btn btn-outline-dark btn-sm text-uppercase">read more <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-md-3 col-lg-3 p-3">
                    <div class="card shadow w-100 h-100 border-0">
                        <img src="{{ asset('View/img/noimage.jpg') }}" class="card-img-top object-cover" />
                        <div class="card-body">
                            <h5 class="card-title">Blog Heading 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor error,
                                exercitationem impedit incidunt ipsum itaque non quasi quia voluptatum. Assumenda aut dicta
                                ducimus earum facilis minus, non quis voluptates?</p>
                            <a href="#?" class="btn btn-outline-dark btn-sm text-uppercase">read more <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-md-3 col-lg-3 p-3">
                    <div class="card shadow w-100 h-100 border-0">
                        <img src="{{ asset('View/img/noimage.jpg') }}" class="card-img-top object-cover" />
                        <div class="card-body">
                            <h5 class="card-title">Blog Heading 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor error,
                                exercitationem impedit incidunt ipsum itaque non quasi quia voluptatum. Assumenda aut dicta
                                ducimus earum facilis minus, non quis voluptates?</p>
                            <a href="/blog/3" class="btn btn-outline-dark btn-sm text-uppercase">read more <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-md-3 col-lg-3 p-3">
                    <div class="card shadow w-100 h-100 border-0">
                        <img src="{{ asset('View/img/noimage.jpg') }}" class="card-img-top object-cover" />
                        <div class="card-body">
                            <h5 class="card-title">Blog Heading 4</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor error,
                                exercitationem impedit incidunt ipsum itaque non quasi quia voluptatum. Assumenda aut dicta
                                ducimus earum facilis minus, non quis voluptates?</p>
                            <a href="/blog/4" class="btn btn-outline-dark btn-sm text-uppercase">read more <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center mt-3">
                    <a href="#" class="btn btn-lg btn-theme text-light text-uppercase">all posts <i
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
                    <label for="contact-message">Email</label>
                    <textarea class="form-control w-100" name="message" id="contact-message"
                              placeholder="Your Message Here..." rows="5" required></textarea>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-lg btn-theme mt-3 text-light text-uppercase">send message</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer -->
    <footer class="py-5 border border-top border-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4 offset-md-1">
                    <a href="{{route('/')}}"><img src="{{asset('View/img/logo.png')}}" class="header-logo"
                                                     alt="IG Education Logo" /></a>
                    <h2 class="display-5 color-primary">Inspiren Global Education Ltd.</h2>
                    <p class="text-justify py-3">We are committed to provide the excellent services to our clients and our
                        business partners. We take pride of our services and are determined to continuously enhance our
                        reputation and relationships with wider stakeholders.</p>
                    <p class="socials">
                        <a href="https://www.facebook.com/InspirenGlobalEducation/" target="_blank"><i
                                class="fab fa-2x fa-facebook social-fb mr-3"></i></a>
                        <a href="https://twitter.com/InspirenEdu" target="_blank"><i
                                class="fab fa-twitter social-twitter fa-2x mr-3"></i></a>
                        <a href="https://www.linkedin.com/in/inspiren-global-education-b79457194/" target="_blank"><i
                                class="fab fa-2x fa-linkedin social-linkedin mr-3"></i></a>
                    </p>
                </div>
                <div class="col-12 col-md-4 offset-md-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7751628087376!2d-0.06868078384391355!3d51.51734077963678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761dd04a1cbff1%3A0x973021f589122d30!2sInspiren%20Global%20Education%20Ltd.!5e0!3m2!1sen!2sbd!4v1577269861290!5m2!1sen!2sbd"
                        class="w-100 h-100" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </footer>

    <section class="bg-color-primary pt-3 pb-2 text-light">
        <p class="text-justify text-center">Copyright &copy; 2019 | All rights reserved by Inspiren Global Education Ltd.
        </p>
    </section>

@endsection

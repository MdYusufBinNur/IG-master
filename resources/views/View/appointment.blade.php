@extends('View.layout')

@section('page-content')

    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-calendar"></i>
            Appointment</h2>
    </section>


    <section class="institutes mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-family: 'FontAwesome', 'Times New Roman',serif">
                        Whether you are thinking about which course and university might be right for you or have any enquiry about study in Abroad, please submit the form and our related educational adviser will call you back
                    </p>
                </div>
                <div class="col-md-12">
                    <h1 class="display-5 color-primary mb-2">{{ "Book An Appointment" }}</h1>

                    <p style="font-family: 'FontAwesome', 'Times New Roman',serif; ">
                        We appreciate that you have provided us with personal information, we will never exchange your data with anyone else and this data will be used for IG EDUCATION purpose only. We intend to keep you informed about current and future study opportunities using the contact details you provide here.
                    </p>
                </div>
            </div>
            <div class="card shadow rounded p-3 border-0">
                <form action="{{ url('/req_for_call') }}" method="post" enctype="multipart/form-data">

                    @csrf()
                    <div class="form-row">

                        <div class="form-group col-md-6 mb-3 px-4">
                            <label for="firstName"><small>First Name</small></label>
                            <input type="text" class="form-control" id="firstName" name="first_name"
                                   placeholder="First Name" value=""
                                   required>
                        </div>

                        <div class="form-group col-md-6 mb-3 px-4">
                            <label for="lastName"><small>Last Name</small></label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" value=""
                                   name="last_name" required>
                        </div>

                        <div class="form-group col-md-6 mb-3 px-4">
                            <label for="email"><small>Email</small></label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                   value="" required>
                        </div>


                        <div class="form-group col-md-6 mb-3 px-4">
                            <label for="phoneNumber"><small>Phone Number</small></label>
                            <input type="number" class="form-control" id="phoneNumber" placeholder="Phone Number"
                                   value="" name="mobile"
                                   required>
                        </div>
                        <div class="form-group col-md-6 mb-3 px-4">
                            <label for="previousQualification"><small> Qualification</small></label>
                            <input type="text" class="form-control" id="previousQualification"
                                   name="qualification"
                                   placeholder="Qualification" value="" required>
                        </div>
                        <div class="form-group col-md-6 mb-3 px-4">
                            <label for="previousQualification"><small> IELTS</small></label>
                            <input type="number" class="form-control" id="ielts"
                                   name="ielts"
                                   placeholder="IELTS Point" value="" required>
                        </div>

                        <div class="form-group col-md-6 mb-3 px-4">
                            <label for="interestedCourse"><small>Interested Country</small></label>
                            <select class="form-control interestedCourse" name="country_id" required>
                                <option value="">Interested Country</option>
                                @if(!empty($countries))
                                    @foreach( $countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-md-6 mb-3 px-4">
                            <label for="interestedCourse"><small>Interested Course</small></label>
                            <select class="form-control interestedCourse" name="course_id" required>
                                <option value="">Interested Course</option>

                                @if(!empty($courses))
                                    @foreach( $courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group col-md-12 mb-3 px-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="userInputAuth">
                                <label class="custom-control-label" for="userInputAuth"><small>I agree to receive other communications from IG EDUCATION. You may unsubscribe from these communications at any time. For more information on how to unsubscribe, our privacy practices, and how we are committed to protecting and respecting your privacy, please review our Privacy Policy.

                                        By clicking submit below, you consent to allow IG EDUCATION to store and process the personal information submitted above to provide you the content requested.</small></label>
                            </div>
                            <div>
                                <p id="check_if_checked" class="text-danger">Please do agree with our terms and conditions first</p>
                            </div>
                        </div>
                        <div class="form-group col-md-12 mb-3 d-flex align-items-center mt-5">
                            <input type="submit"
                                   id="req_call"
                                   class="btn btn-theme-sm mx-auto text-capitalize font-weight-bold rounded-0 px-5"
                                   value="SUBMIT">
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </section>




@endsection

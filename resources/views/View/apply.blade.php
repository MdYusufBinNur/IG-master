@extends('View.layout')

@section('page-content')


<section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
    <div class="page-title">
        <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i class="fas fa-pen-nib"></i>
            Apply Now
        </h2>
    </div>
</section>



<section class="success-stories mb-5">
    <div class="container">
        <h2 class="text-left text-uppercase font-weight-bold color-primary p-2">Please, fill up the
            form<br><small>carefully</small>
        </h2>
        <div class="card shadow rounded p-3 border-0">
            <form action="{{ url('/save_apply') }}" method="post" enctype="multipart/form-data">

                @csrf()
                <div class="form-row">

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="firstName"><small>First Name</small></label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name" value=""
                            required>
                    </div>

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="lastName"><small>Last Name</small></label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required>
                    </div>

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="email"><small>Email</small></label>
                        <input type="email" class="form-control" id="email" placeholder="Eemail" value="" required>
                    </div>

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="dob"><small>Date of Birth</small></label>
                        <input type="date" class="form-control" id="dob" value="" required>
                    </div>

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="presentAddress"><small>Present Address</small></label>
                        <textarea class="form-control" id="presentAddress" rows="3" placeholder="Present Address"
                            value="" required></textarea>
                    </div>

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="permanentAddress"><small>Permanent Address</small></label>
                        <textarea class="form-control" id="permanentAddress" rows="3" placeholder="Permanent Address"
                            value="" required></textarea>
                    </div>


                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="phoneNumber"><small>Phone Number</small></label>
                        <input type="number" class="form-control" id="phoneNumber" placeholder="Phone Number" value=""
                            required>
                    </div>


                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="nationality"><small>Nationality</small></label>
                        <input type="text" class="form-control" id="lastName" placeholder="Nationality" value=""
                            required>
                    </div>

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="passportNumber"><small>Passport Number</small></label>
                        <input type="text" class="form-control" id="passportNumber" placeholder="Passport Number"
                            value="" required>
                    </div>


                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="typeOfStudent"><small>Type of Student</small></label>
                        <select class="form-control typeOfStudent" required>
                            <option value="Type of student" selected>Type of student</option>
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="previousQualification"><small>Previous Qualification</small></label>
                        <input type="text" class="form-control" id="previousQualification"
                            placeholder="Previous Qualification" value="" required>
                    </div>


                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="interestedCourse"><small>Interested Course</small></label>
                        <select class="form-control interestedCourse" required>
                            <option value="Interested Course" selected>Interested Course</option>
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
                        </select>
                    </div>


                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="userPhoto"><small>Upload Your Photo (Upload as JPG or PNG, maximum file size
                                2MB)</small></label>
                        <div class="custom-file">
                            <input type="file" class="form-control userPhotoInput" id="userPhoto" required>
                            <label class="custom-file-label" for="userPhoto">Choose Photo</label>
                        </div>
                    </div>

                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="userPassport"><small>Passport Scan Copy (Minimum First 6 Pages, upload as ZIP
                                archive)</small></label>
                        <div class="custom-file">
                            <input type="file" class="form-control userPassportInput" id="userPassport" required>
                            <label class="custom-file-label" for="userPassport">Choose File</label>
                        </div>
                    </div>



                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="userCertificates"><small>Academic Transcripts & Certificates (Upload as ZIP
                                archive)</small></label>
                        <div class="custom-file">
                            <input type="file" class="form-control userCertificatesInput" id="userCertificates"
                                required>
                            <label class="custom-file-label" for="userCertificates">Choose File</label>
                        </div>
                    </div>



                    <div class="form-group col-md-6 mb-3 px-4">
                        <label for="userResearch"><small>Upload Research Papers for D.B.A or Ph.D / Mphil or Research
                                Degrees</small></label>
                        <div class="custom-file">
                            <input type="file" class="form-control userResearchInput" id="userResearch" required>
                            <label class="custom-file-label" for="userResearch">Choose Photo</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12 mb-3 px-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="userInputAuth">
                            <label class="custom-control-label" for="userInputAuth"><small>I can confirm that the
                                    details above
                                    and submitted documents to Aspire Education Services Ltd are true and genuine. I do
                                    hereby also authorize Aspire Education Services Ltd to hold these data until my
                                    admission is successful.</small></label>
                        </div>
                    </div>


                    <div class="form-group col-md-12 mb-3 d-flex align-items-center mt-5">
                        <input type="submit"  class="btn btn-dark mx-auto text-capitalize font-weight-bold rounded-0 px-5" value="SUBMIT">

                    </div>

                </div>

            </form>
        </div>
    </div>
</section>


@endsection

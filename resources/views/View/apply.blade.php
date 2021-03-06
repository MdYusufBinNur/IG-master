@extends('View.layout')

@section('style')
    <style>
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: rgba(2, 19, 76, 0.87);
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet"/>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>--}}
    {{-- ...Some more scripts... --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@endsection
@section('page-content')
    <section class="breadcrumb py-5 bg-color-primary justify-content-center rounded-0">
        <div class="page-title">
            <h2 class="text-center text-uppercase text-light display-4 d-flex flex-column"><i
                    class="fas fa-pen-nib"></i>
                Apply Now
            </h2>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">

            <form action="{{ url('/save_apply') }}" method="post" id="regForm" enctype="multipart/form-data">

                @csrf()
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         id="progress_bar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                    </div>
                </div>

                <h1 class="text-center" style="color: #0c1b55"><strong>Application Form</strong></h1>

                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <div>
                        <label for="month">Month </label>
                        <select class="custom-select my-1 mr-sm-2" id="month" onselect="this.className" required>
                            <option value="January" selected>January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <div>
                        <label for="month">Year </label>
                        <select class="custom-select my-1 mr-sm-2" id="year" onselect="this.className" required>

                            <option value="2020" selected>2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>

                        </select>
                    </div>
                </div>

                <div class="tab">
                    <label for="">UKVI IELTS: </label>
                    <div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" id="yes">Yes
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" checked name="optradio" id="no">No
                            </label>
                        </div>
                    </div>
                    <div class="point">
                        <label for="">Band Score</label>
                        <input placeholder="" name="ielts_points" class="form-control" id="ielts_points">
                    </div>
                    <div>
                        <label for="find_country">Country </label>
                        <select class="custom-select my-1 mr-sm-2 find_country" id="find_country" name="country" onselect="this.className"
                                required>

                        </select>
                    </div>
                    <div>
                        <label for="month">University you are interested in </label>
                        <select class="custom-select my-1 mr-sm-2 find_university" id="find_university" name="university"  onselect="this.className"
                                required>

                        </select>
                    </div>
                    <div>
                        <label for="month">Program you are interested in </label>
                        <select class="custom-select my-1 mr-sm-2 find_program" id="find_program" name="program" onselect="this.className"
                                required>

                        </select>
                    </div>
                    <div>
                        <label for="month">Course you are interested in </label>
                        <select class="custom-select my-1 mr-sm-2 find_course" id="find_course" name="course" onselect="this.className"
                                required>

                        </select>
                    </div>
                    <div id="check_if_selected">
                        <span class="text-danger"> Select All Filed</span>
                    </div>

                    <div class="mb-4">
                        <label for="month">Current Qualification </label>
                        <input placeholder="" name="qualification" class="form-control input" oninput="this.className = ''">
                    </div>
                </div>

                <div class="tab">
                    <div>
                        <label for="month">First Name</label>
                        <input placeholder="" name="first_name" class="form-control input" oninput="this.className = ''">
                    </div>
                    <div>
                        <label for="month">Last Name</label>
                        <input placeholder="" name="last_name" class="form-control input" oninput="this.className = ''">
                    </div>
                    <div>
                        <label for="month">Phone</label>
                        <input placeholder="" name="mobile" class="form-control input" oninput="this.className = ''">
                    </div>
                    <div class="mb-4">
                        <label for="month">Email</label>
                        <input placeholder="" name="email" class="form-control input" oninput="this.className = ''">
                    </div>
                    {{--<p><input placeholder="dd" class="form-control" oninput="this.className = ''"></p>
                    <p><input placeholder="mm" class="form-control" oninput="this.className = ''"></p>
                    <p><input placeholder="yyyy" class="form-control" oninput="this.className = ''"></p>--}}
                </div>

                <div class="tab">
                    <div class="form-group">
                        <label for="document">Upload any important document</label>
                        <div class="needsclick dropzone" id="document-dropzone">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="document">Immigration History/Comments</label>
                        <textarea class="form-control" rows="3" name="comments"></textarea>
                    </div>
                    {{--            <p><input placeholder="Username..." class="form-control" oninput="this.className = ''"></p>--}}
                    {{--            <p><input placeholder="Password..." class="form-control" oninput="this.className = ''"></p>--}}
                </div>

                <div>
                    <div>
                        <button class="btn  btn-block" style="background-color: #040d21; color: white" type="button"
                                id="prevBtn" onclick="nextPrev(-1)">Previous
                        </button>
                        <button type="button" class="btn btn-block" style="background-color: #0c1b55; color: white"
                                id="nextBtn" onclick="nextPrev(1)">Next
                        </button>
                    </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
{{--                <div style="text-align:center;margin-top:40px;">--}}
{{--                    <span class="step"></span>--}}
{{--                    <span class="step"></span>--}}
{{--                    <span class="step"></span>--}}
{{--                    <span class="step"></span>--}}
{{--                </div>--}}

            </form>
        </div>
    </div>

@endsection
@section('script')
    <script !src="">
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n === 0) {

                document.getElementById("prevBtn").style.display = "none";
            } else {

                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n === (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Request To Review Application";
            } else {
                // $('#progress_bar').css('width' , 5 + "%")
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
           // fixStepIndicator(n)
        }


        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n === 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            for (let i = 0; i < currentTab; i++) {
                let k = 2 + i;
                $('#progress_bar').css('width', k * 25 + "%");
                $('#progress_bar').text(k * 25);
            }

            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }

            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByClassName("input");

            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                //console.log()
                if (y[i].value === "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
                if (!$('#find_university').val() ||
                    !$('#find_country').val() ||
                    !$('#find_course').val() ||
                    !$('#find_program').val())
                {
                    $('#check_if_selected').show()
                    document.getElementById('find_country')
                        .setCustomValidity('Select');
                    valid = false;
                }
                // if (!$('#find_country').val()){
                //     document.getElementById('find_country')
                //         .setCustomValidity('Select Country');
                //     valid = false;
                // }
                // if (!$('#find_course').val()){
                //     document.getElementById('find_course')
                //         .setCustomValidity('Select Course');
                //     valid = false;
                // }
                // if (!$('#find_program').val()){
                //     document.getElementById('find_program')
                //         .setCustomValidity('Select Program');
                //     valid = false;
                // }
            }


            // // If the valid status is true, mark the step as finished and valid:
            // if (valid) {
            //     document.getElementsByClassName("step")[currentTab].className += " finish";
            // }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...

            var i, x = document.getElementsByClassName("step");

            for (i = 1; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");

            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }

        $('div.point').hide();
        $('#yes').on('click', function () {
            $('div.point').show();
        })
        $('#no').on('click', function () {
            $('div.point').hide();
        })

        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
            url: '{{ route('projects.storeMedia') }}',
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="applicant_files[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove()
                let name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="applicant_files[]"][value="' + name + '"]').remove()
            }
        }
    </script>
@endsection

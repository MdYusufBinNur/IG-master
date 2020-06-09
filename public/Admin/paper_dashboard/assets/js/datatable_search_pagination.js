$().ready(function() {

    $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
            class: 'navbar-form navbar-left navbar-search-form'
        }
    });

      let table = $('#datatables').DataTable();
                // Edit record
                table.on( 'click', '.edit', function (e) {

                    let id = $(this).data('id');
                    let url = $(this).data('body');

                   // alert(id)
                    $.ajax({
                        url: url+'s/'+id,
                        method: 'GET',
                        success: function (response) {

                            //console.log(url)
                            loadData(url, response)

                        }, error: function (response) {
                            console.log(response)
                            modalHide();
                            swal("Failed to load data", "", "error");
                        }
                    })
                });

                // Delete a record

                table.on( 'click', '.remove', function (e) {
                    //alert('HH')
                    let id = $(this).data('id');
                    let url = $(this).data('body');
                    //alert(url)
                    swal({
                            title: "Are you sure?",
                            text: "You won't be able to retrieve this file.",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Yes, archive it!",
                            cancelButtonText: "No, cancel please!",
                            closeOnConfirm: false,
                            closeOnCancel: false
                        },
                        function(isConfirm){
                            if (isConfirm) {
                                $.ajax({
                                    url: url+'s/'+id,
                                    method: 'DELETE',
                                    data: {"_token": $('meta[name="csrf-token"]').attr('content')},
                                    success: function (data) {
                                        console.log(data);
                                        swal("success", "Data Updated", "success");
                                        window.location.href = url+'s'
                                    },
                                    error: function (response) {
                                        // console.log(response)
                                        swal("error", "Failed to delete", "error");
                                    }
                                })
                              // window.location.href = url+'s/'+id;
                            } else {
                                swal("Cancelled", "Your imaginary file is safe :)", "error");
                            }
                        });

                    e.preventDefault();
                } );



});


function loadData(url, response) {
    switch (url) {
        case 'about' :
            loadAbout(response);
            break;

        case 'contact':
            // alert('Contact')
            break;

        case 'course' :
            loadCourse(response)
            //tinyMCE_init();
            break;

        case 'countrie':
            loadCountry(response)
            break;

        case 'universitie':
            loadUniversity(response);
            break;

        case 'procedure' :
            tinyMCE_init();
            loadProcedure(response);
            break;

        case 'program':
            loadPrograms(response);
            break;

        case 'scholarship':
            loadScholarship(response);
            break;

        case 'service':
            loadService(response);
            break;

        case 'linker':
            loadLinker(response);
            break;

        case 'storie':
            loadStory(response);
            break;

        case 'testimonial':
            loadTestimonial(response);
            break;

        case 'applie':
            loadApplicant(response)
            break;

        case 'owner':
            loadOwnerInfo(response);
            break;

        case 'slider':
            loadSlider(response);
            break;

        case 'blog':
            loadBlog(response);
            break;

        case 'institute':
            loadInstitute(response);
            break;

        case 'blogcategorie':
            loadCategory(response);
            break;

        case 'uni_categorie':
            loadUniCategory(response);
            break;

        case 'set_up_apply_processe':
            // alert('hi')
            loadProcess(response);
            break;

        case 'parent_program':
            load_parent_programs(response);
            break;

        case 'req_to_call_back':

            loadAppointment(response);
            break;
    }

}

function tinyMCE_init() {
    tinymce.init({
        selector:'textarea',
        plugins: "lists",
        toolbar: "numlist bullist *",
        height: 200,
    });
}

function modalHide() {
    $('#Modal').modal('hide')
}

function load_parent_programs(response) {
    $('#parent_program_id').val(response.id);
    $('#name').val(response.name);
}

function loadProcess(response) {
    $('#process_id').val(response.id);
    $('#apply_details').val(response.apply_details);
}

function loadAbout(response) {
    $('#about_id').val(response.id);
    $('#about_title').val(response.about_title);
    $('#about_description').text(response.about_description);
    $('#about_mission').text(response.about_mission);
    $('#about_vision').text(response.about_vision);
    $('#old_logo').attr('src',response.about_image);
}

function loadCountry(response) {

    //console.log(response)
    $('#country_id').val(response.id);
    $('#country_name').val(response.country_name);
    $('#at_a_glance').val(response.at_a_glance);
    $('#old_logo').attr('src',response.country_image);
}

function loadUniversity(response) {
    //console.log(response)
    $('#university_id').val(response.id)
    $('#old_country_name').val(response.country['country_name'])
    $('#university_name').val(response.university_name)
    $('#university_description').val(response.university_description)
    $('#old_logo').attr('src',response.university_image);

}

function loadPrograms(response) {


    $('#program_id').val(response.id);
    $('#old_university_name').val(response.university['university_name']);
    $('#old_program_name').val(response.program_name);
    $('#program_name').val(response.program_name);

}

function loadCourse(data) {


    $.each(data, function (index, response) {
        //console.log(response.id)
        $('#course_id').val(response.id);
        $('#old_program_name').val(response.program_name);
        $('#course_name').val(response.course_name);
        $('#course_full_name').val(response.course_full_name);
        $('#course_fee').val(response.course_fee);
        $('#course_duration').val(response.course_duration);
        $('#intake').val(response.intake);
        $('#course_details').text(response.course_details);
        $('#university_id').append("<option value="+ response.university_id +" selected>"+response.university_name+"</option>")
        $('#country_id').append("<option value="+ response.country_id +" selected>"+response.country_name+"</option>")
        $('#program_id').append("<option value="+ response.program_id +" selected>"+response.program_name+"</option>")
    })

}

function loadOwnerInfo(response) {


    $('#owner_id').val(response.id);
    $('#owner_name').val(response.owner_name);
    $('#owner_email').val(response.owner_email);
    $('#owner_mobile').val(response.owner_mobile);
    $('#owner_message').val(response.owner_message);
    $('#old_logo').attr('src',response.owner_image);
}

function loadProcedure(response) {
    $('#procedure_id').val(response.id);
    $('#old_country_name').val(response.country['country_name']);
    $('#description').val(response.description);
    $('#old_logo').attr('src',response.country_map_image);
}

function loadScholarship(response) {
    $('#scholarship_id').val(response.id);
    $('#scholarship_title').val(response.scholarship_title);
    $('#scholarship_description').val(response.scholarship_description);
    $('#old_logo').attr('src',response.scholarship_image);
}

function loadService(response) {

    $('#service_id').val(response.id);
    $('#service_title').val(response.service_title);
    $('#service_description').val(response.service_description);
    $('#old_logo').attr('src',response.service_image);
}

function loadLinker(response) {
    $('#social_linker_id').val(response.id);
    $('#name').val(response.name);
    $('#social_link').val(response.social_link);
    $('#old_logo').attr('src',response.social_icon);
}

function loadSlider(response) {
    $('#slider_id').val(response.id);
    $('#slider_name').val(response.slider_name);
    $('#old_logo').attr('src',response.slider_image);

}

function loadStory(response) {
    $('#success_story_id').val(response.id);
    $('#old_country').val(response.country['country_name']);
    $('#description').val(response.description);
    $('#source').val(response.source);
    $('#title').val(response.title);
    $('#old_logo').attr('src',response.story_image);

}

function loadTestimonial(response) {
    $('#testimonial_id').val(response.id);
    $('#testimonial_title').val(response.testimonial_title);
    $('#testimonial_description').val(response.testimonial_description);
    $('#old_logo').attr('src',response.testimonial_image);
}

function loadBlog(response) {
     console.log(response)
    $('#blog_id').val(response.id);
    $('#blog_title').val(response.blog_title);
    $('#ols_blog_cat').val(response.category.category_name);
    $('#blog_description').val(response.blog_description);
    $('#old_logo').attr('src',response.blog_image);
}

function loadApplicant(response) {
    $('#applicant_academic_certificate_').html("")
    $('#applicant_id').val(response.id);
    $('#applicant_name').text(response.first_name + ' ' + response.last_name);
    $('#applicant_email').text(response.email);
    $('#applicant_mobile').text(response.mobile);
    $('#ielts_points').text(response.ielts_points);

    $('#applicant_interested_course').text(response.course.course_name);
    $('#applicant_interested_country').text(response.country.country_name);
    $('#applicant_interested_program').text(response.program.program_name);
    $('#applicant_interested_univeristy').text(response.university.university_name);
    $('#applicant_present_qualification').text(response.qualification);
    $('#applicant_comments').text(response.comments);
    /*$('#applicant_image').attr('src',response.photo);*/

    $.each(JSON.parse(response.applicant_files), function (index, val) {

        $('#applicant_academic_certificate_').append("<a href="+val+" target=\"_blank\"> <p id=\"applicant_academic_certificate\">"+val+"</p> </a>");

    });

}

function loadAppointment(response) {
    console.log(response)
    $('#applicant_academic_certificate_').html("")
    $('#applicant_id').val(response.id);
    $('#applicant_name').text(response.first_name + ' ' + response.last_name);
    $('#applicant_email').text(response.email);
    $('#applicant_mobile').text(response.mobile);
    $('#ielts_points').text(response.ielts_points);

    $('#applicant_interested_course').text(response.course.course_name);
    $('#applicant_interested_country').text(response.country.country_name);
    $('#applicant_present_qualification').text(response.qualification);
    $('.check_switch').show();
    if (response.accepted === 1)
    {
        $('.check_switch').hide();
    }


}

function loadInstitute(response) {
    $('#institute_id').val(response.id);
    $('#institute_name').val(response.institute_name);
    $('#old_logo').attr('src',response.institute_image);
}
function loadCategory(response) {

    $('#category_id').val(response.id);
    $('#category_name').val(response.category_name);
    $('#category_description').val(response.category_description);
}
function loadUniCategory(response) {

    $('#category_id').val(response.id);
    $('#category_name').val(response.name);

}


function init_db() {


    let table = $('#daaa').DataTable();
    // Edit record
    table.on( 'click', '.edit', function (e) {

        let id = $(this).data('id');
        let url = $(this).data('body');

        // alert(id)
        $.ajax({
            url: url+'s/'+id,
            method: 'GET',
            success: function (response) {

                //console.log(url)
                loadData(url, response)

            }, error: function (response) {

                modalHide();
                swal("Failed to load data", "", "error");
            }
        })
    });

}

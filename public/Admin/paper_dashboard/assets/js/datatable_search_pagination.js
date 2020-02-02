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

                    $.ajax({
                        url: url+'s/'+id,
                        method: 'GET',
                        success: function (response) {

                            loadData(url, response)

                        }, error: function (response) {

                            //modalHide();
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
                                        /*swal({
                                            title: "Deleted",
                                            text: "You won't be able to retrieve this file.",
                                            type: "success",
                                            confirmButtonText: "OK",
                                        }), function (ifConfirm) {
                                            if (ifConfirm){
                                                alert('Hi')
                                            }
                                        }*/

                                    },
                                    error: function (response) {
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
            //tinyMCE_init();
            break;

        case 'program':
            loadPrograms(response);
            break;

        case 'scholarship':
            break;

        case 'service':
            break;

        case 'linker':
            break;

        case 'successstory':
            break;

        case 'testimonial':
            break;

        case 'applie':
            break;
        case 'owner':
            loadOwnerInfo(response);
            break;
    }

}

function tinyMCE_init() {
    tinymce.init({
        selector:'textarea',
        height: 200,
    });
}

function modalHide() {
    $('#Modal').modal('hide')
}

function loadAbout(response) {
    $('#about_id').val(response.id);
    $('#about_title').val(response.about_title);
    $('#about_description').val(response.about_description);
    $('#about_mission').val(response.about_mission);
    $('#about_vision').val(response.about_vision);
    $('#old_logo').attr('src',response.about_image);
}

function loadCountry(response) {

    console.log(response)
    $('#country_id').val(response.id);
    $('#country_name').val(response.country_name);
    $('#at_a_glance').val(response.at_a_glance);
    $('#old_logo').attr('src',response.country_image);
}

function loadUniversity(response) {
    console.log(response)
    $('#university_id').val(response.id)
    $('#old_country_name').val(response.country['country_name'])
    $('#university_name').val(response.university_name)
    $('#university_description').val(response.university_description)
    $('#old_logo').attr('src',response.university_image);

}

function loadPrograms(response) {


    $('#program_id').val(response.id);
    $('#old_university_name').val(response.university['university_name']);
    $('#program_name').val(response.program_name);

}

function loadCourse(response) {

    $('#course_id').val(response.id);
    $('#old_program_name').val(response.program['program_name']);
    $('#course_name').val(response.course_name);
    $('#course_details').text(response.course_details);
}

function loadOwnerInfo(response) {


    $('#owner_id').val(response.id);
    $('#owner_name').val(response.owner_name);
    $('#owner_message').val(response.owner_message);
    $('#old_logo').attr('src',response.owner_image);
}

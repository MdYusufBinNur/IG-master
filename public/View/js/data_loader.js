$().ready(function() {
    $.ajax({
        url: '/get_country',
        method: 'get',
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},
        success: function (data) {
            callback()
            $.each(data, function(i, data) {


                let country_name = data.country_name;
                let value = data.id;

                $("#find_country").append("<option value="+ value +">"+country_name+"</option>");

            });
        },
        error: function (response) {
           console.log(response)
        }
    });

    $('#find_country').on('change', function () {
        $.ajax({
            url: 'get_university/'+ this.value,
            method: 'get',
            data: {"_token": $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                make_empty_course();
                make_empty_program();
                make_empty_university();

                $.each(data, function(i, data) {
                    let university_name = data.university_name;
                    let value = data.id;
                    $("#find_university").append("<option value="+ value +">"+university_name+"</option>");
                });

            }, error: function (data) {

            }
        })

    });

    $('#find_university').on('change', function () {
        $.ajax({
            url: 'get_program/'+ this.value,
            method: 'get',
            data: {"_token": $('meta[name="csrf-token"]').attr('content')},
            success: function (response) {
                make_empty_program();
                make_empty_course();
                $.each(response, function (i, data) {
                    let program_name = data.program_name;
                    let value = data.id;
                    $('#find_program').append("<option value="+ value +">"+program_name+"</option>")
                })
            }
        })
    });

    $('#find_program').on('change', function () {
        $.ajax({
            url: 'get_courses/'+ this.value,
            method: 'get',
            data: {"_token": $('meta[name="csrf-token"]').attr('content')},
            success: function (response) {``
                make_empty_course();
                $.each(response, function (i, data) {
                    let course_name = data.course_name;
                    let value = data.id;
                    $('#find_course').append("<option value="+ value +">"+course_name+"</option>")

                })
            }
        })

    })


});
function callback() {
    $("#find_country").append("<option>Select one</option>");
    $("#find_university").find('option').remove().end();
    $("#find_university").append("<option >Select one</option>");
    $('#find_course').find('option').remove().end()
    $("#find_course").append("<option >Select one</option>");
    $('#find_program').find('option').remove().end()
    $("#find_program").append("<option =>Select one</option>");
}

function make_empty_program() {
    $('#find_program').find('option').remove().end()
    $("#find_program").append("<option >Select one</option>");
}
function make_empty_course() {
    $('#find_course').find('option').remove().end()
    $("#find_course").append("<option value=''>Select one</option>");
}

function make_empty_university() {
    $("#find_university").find('option').remove().end();
    $("#find_university").append("<option >Select one</option>");
}

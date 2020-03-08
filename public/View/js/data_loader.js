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

    // $('#pills-info').hide()
    // $('#pills-academic').hide()


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
$(document).on('click','#load_more', function () {
    let max_id = $('#max_blog').text()

    $.ajax({
        url: 'load_more_blog/' + max_id,
        method: 'get',
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {

            $.each(response.blogs, function (i, data) {
                $('.blog_data').append(
                    "                            <div class=\"card border-0 shadow-sm\">\n" +
                    "                                <img src=\""+data.blog_image+"\" class=\"card-img-top\" alt=\"\">\n" +
                    "                                <div class=\"card-body p-2\">\n"+
                    "                                    <h5 class=\"card-title font-weight-bold\">"+ data.blog_title+"</h5>\n" +
                    "                                    <p class=\"card-text\">"+ data.blog_description.substring(0, 200) +"...\n" +
                    "                                    </p>\n" +
                    "                                    <a href=\" get_blog_details/"+data.id+" \" class=\"btn btn-theme-sm text-white text-capitalize text-center\">Read more</a>\n" +
                    "                                </div>\n" +
                    "                            </div>"

                )
            })

            $('#max_blog').text(response.max_blog_id);

        }
    })

});

$(document).on('click','#list_category', function (e) {

    let id = $(this).data('id');

    let max_id = $('#max_blog').text()

    $.ajax({
        url: 'load_categorized_blog/' + id,
        method: 'get',
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {

            $('.change_blog').html("")
            $('.blog_data').html("")
            $('.more_blog').html("").append("<a href=\"#?\" class=\"btn btn-theme-sm mx-auto text-capitalize font-weight-bold px-5 mb-4\" id=\"load_more_categorized_blog\" >Load More</a>");



            $.each(response.blogs, function (i, data) {
                $('#blog_id').text(data.blogcategory_id)

                $('.change_blog').append(
                    "                           <div class=\"card border-0 shadow-sm\">\n" +
                    "                                <img src=\""+data.blog_image+"\" class=\"card-img-top\" alt=\"\">\n" +
                    "                                <div class=\"card-body p-2\">\n"+
                    "                                    <h5 class=\"card-title font-weight-bold\">"+ data.blog_title+"</h5>\n" +
                    "                                    <p class=\"card-text\">"+ data.blog_description.substring(0, 200) +"...\n" +
                    "                                    </p>\n" +
                    "                                    <a href=\" get_blog_details/"+data.id+" \" class=\"btn btn-theme-sm text-white text-capitalize text-center\">Read more</a>\n" +
                    "                                </div>\n" +
                    "                            </div>"

                )

            })

            $('#max_blog').text(response.max_blog_id);

        }
    })
});

$(document).on('click','#load_more_categorized_blog', function (e) {
    let max_blog_id = $('#max_blog').text();
    let blog_id = $('#blog_id').text();

    $.ajax({
        url: 'load_more_categorized_blog/' + blog_id + '/' +max_blog_id,
        method: 'get',
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {

            $.each(response.blogs, function (i, data) {
                $('#blog_id').text(data.blogcategory_id)

                $('.change_blog').append(
                    "                           <div class=\"card border-0 shadow-sm\">\n" +
                    "                                <img src=\""+data.blog_image+"\" class=\"card-img-top\" alt=\"\">\n" +
                    "                                <div class=\"card-body p-2\">\n"+
                    "                                    <h5 class=\"card-title font-weight-bold\">"+ data.blog_title+"</h5>\n" +
                    "                                    <p class=\"card-text\">"+ data.blog_description.substring(0, 200) +"...\n" +
                    "                                    </p>\n" +
                    "                                    <a href=\" get_blog_details/"+data.id+" \" class=\"btn btn-theme-sm text-white text-capitalize text-center\">Read more</a>\n" +
                    "                                </div>\n" +
                    "                            </div>"

                )

            })

            $('#max_blog').text(response.max_blog_id);

        }
    });
})

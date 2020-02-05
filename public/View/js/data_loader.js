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
        alert(this.value)
    })

});
function callback() {

    $("#find_country").append("<option >Select one</option>");
    $("#find_university").find('option').remove().end();
    $("#find_university").append("<option >Select one</option>");

    $('#find_course').find('option').remove().end()
    $("#find_course").append("<option >Select one</option>");
    $('#find_program').find('option').remove().end()
    $("#find_program").append("<option >Select one</option>");
}

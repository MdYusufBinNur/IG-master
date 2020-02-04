$().ready(function() {
    $.ajax({
        url: '/get_country',
        method: 'get',
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},
        success: function (data) {
            console.log(data[0].university[0].program);

        },
        error: function (response) {
           console.log(response)
        }
    })

});

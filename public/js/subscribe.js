function subscribe(){
    $email = $('#email_subscribe').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
       type: 'POST',
        url: 'subscribe',
       data: {
            'email' : $email
       },
        success: function (data){
            console.log(data);
        },
        error: function (data){
            console.log(data);
        }
    });
}

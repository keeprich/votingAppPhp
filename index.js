$(document).ready(function() {
    // alert("Am in");
    fetch_pool_data();
    function fetch_pool_data( ) {
        $.ajax({
            url: "fetch_poll_data.php",
            method: "POST",
            success: function(data) {
                // desplay pool data on webpage
                $('#poll_result').html(data);
            }
        })
    }

    $('#poll_form').on('submit', function(event){
        event.preventDedault();
        var poll_option = '';
        $('.poll_option').each(function() {
            if($(this).prop("checked")){
                poll_option = $(this).val();
            }
        });
    });
    if(poll_option != ''){
        // disable submit button
        $('#poll_button').attr("disabled", "disables");
        // converting form data into url encoded string
        var form_data = $(this).serialize();

        //    writing the ajax
        $.ajax({
            url: "poll.php",
            method: "POST",
            data: form_data,
            success:function(data) {
                $('#poll_form')[0].reset();
                $('#poll_button').attr('disables', false);
                fetch_pool_data();
                alert("Poll Submitted Successfully");
            }
        })
    }else {
        alert('data d');
    }
});
$(document).ready(function() {
    // alert("Am in");

    function fetch_pool_result( ) {
        $.ajax({
            url: "fetch_poll_data.php",
            method: "POST",
            success: function(data) {
                // desplay pool data on webpage
                $('#poll_result').thml(data);
            }
        })
    }
});
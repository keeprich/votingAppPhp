$(document).ready(function() {
    // alert("Am in");
    fetch_pool_data();
    function fetch_pool_data( ) {
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
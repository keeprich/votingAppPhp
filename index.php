<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting App</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    

<div class="container"> 
<br>
<br>
<br>

<h1 align="center">Live Poll system in php</h1>
<br>
<div class="row">
<div class="col-md-6">
<form  method="post" id="poll_form">
<h3>Who this the Best</h3>
<br>
<div class="radio">
<label for="">
<h4>
<input type="radio" name="poll_option" class="poll_option" value="Laravel" id=""> Laravel
</h4>
</label>
</div>

<div class="radio">
<label for="">
<h4>
<input type="radio" name="poll_option" class="poll_option" value="Codeigniter" id=""> Codeigniter
</h4>
</label>
</div>

<div class="radio">
<label for="">
<h4>
<input type="radio" name="poll_option" class="poll_option" value="CakePHP" id=""> CakePHP
</h4>
</label>
</div>


<div class="radio">
<label for="">
<h4>
<input type="radio" name="poll_option" class="poll_option" value="Symfony" id=""> Symfony
</h4>
</label>
</div>


<div class="radio">
<label for="">
<h4>
<input type="radio" name="poll_option" class="poll_option" value="Phalcon" id=""> Phalcon
</h4>
</label>
</div>
<br>
<input type="submit" value="Submit" name="poll_button" id="poll_button" class="btn btn-primary">

</form>
<br>
</div>
<div class="col-md-6">
<br>
<br>
<br>
<h4>Live Poll Results</h4>
<br>
<div id="poll_result"></div>
</div>

</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script src="index.js"></script>

</body>
</html>
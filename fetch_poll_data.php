<?php

include_once('database_connection.php');

$php_framework = array("Laravel", "CodeIgniter", "CakePHP", "Phalcon", "Symfony");

$total_poll_row = get_total_row($connect);

foreach($php_framework as $row) {
    $query = "
    SELECT * FROM poll_results WHERE candidatesData = '".$row.
        "'
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $total_row = $statement->rowCount();
    $percentage_vote = round($total_row/$total_poll_row)*100;


    $progress_bar_class = '';
    if($percentage_vote >= 40) {
        $progress_bar_class = 'progress-bar-sucsess';
    }else if($percentage_vote >= 25 && $percentage_vote < 40) {
        $progress_bar_class = 'progress-bar-info';
    }else if($percentage_vote >= 10 && $percentage_vote < 25) {
        $progress_bar_class = 'progress-bar-warning';
    }else {
              $progress_bar_class = 'progress-bar-danger';

    }

    $output = '
            <div class="row">
            <div class="col-md-2" align="right">
                <lable> '.$row.' </lable>
            </div>
            <div class="col-md-10">
                    <div class="progress">
                    <div class="progress-bar '.$progress_bar_class.'" aria-valuenow="'.$percentage_vote.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$percentage_vote.' %">

                    </div>
                    </div>
                </div>
            </div>
    ';
}


// sending data to ajax request

echo $output;


function get_total_rows($connect)
{
    $query = "SELECT * FROM poll_results";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}


?>
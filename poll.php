<?php

include_once('database_connection.php');

if(isset($_POST["poll_option"])){
    $query = "INSERT INTO poll_results (candidatesData) VALUE (:candidatesData)";

    $data = array(':candidatesData' => $_POST["poll_option"]);

    $statement = $connect->prepare($query);
    $statement->execute($data);
}

?>
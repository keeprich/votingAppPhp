<?php

// $dbHost = localhost;
// $dbName = votingAppPhp;
// $dbHost = keeprich;
// $dbPassword = keeprich;


// $connect = new PDO("mysql:host=$dbHost; dbname=$dbName", 'keeprich', 'keeprich');


$servername = "localhost";
$dbName = "votingAppPhp";
$username = "keeprich";
$password = "keeprich";

try {
  $connnect = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>
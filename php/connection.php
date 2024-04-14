<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "medicalclinicgeorgiivanov";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    // echo "Connection is successful:";  Just to check
}
?>

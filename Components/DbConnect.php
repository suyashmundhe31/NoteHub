<?php
    $servername = "Localhost";
    $username = "root";
    $password = "";
    $database = "Notehub_users";

    $conn = mysqli_connect($servername, $username, $password , $database);
    if (!$conn) {
        die("There is an Error in connection with the database");
    }
?>
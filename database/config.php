<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "taxi_service";
    $conn = mysqli_connect("$server" , "$user" , "$password" , "$database");
    if(!$conn)
    {
        die("Do not connect database");
    }
?>
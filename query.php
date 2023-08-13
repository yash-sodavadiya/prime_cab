<?php 

    if($_SERVER['REQUEST_URI'] == "/taxiservice/" || "/taxiservice/index.php")
    {
        $sql = "SELECT * from tbltaxi";
    }
    if($_SERVER['REQUEST_URI'] == "/taxiservice/booking.php")
    {
        $sql = "SELECT * from tbltaxi where taxi_name = 'Thar' ";
    }
?>
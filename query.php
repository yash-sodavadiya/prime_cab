<?php 

    if($_SERVER['REQUEST_URI'] == "/taxiservice/" || "/taxiservice/index.php")
    {
        $sql = "SELECT * from tbltaxi where taxi_id < 6";
    }
    if($_SERVER['REQUEST_URI'] == "/taxiservice/booking.php")
    {
        $sql = "SELECT * from tbltaxi where taxi_name = 'Thar' ";
    }

?>
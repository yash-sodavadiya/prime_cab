<?php session_start(); ?>
<?php require("../database/config.php") ?>
<?php 
        if (isset($_POST['book']))
        {
            $pname = $_POST['pname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $pickup = $_POST['pickup'];
            $drop = $_POST['drop'];
            $price_km = $_POST['price_km'];
            $tprice = $_POST['tprice'];
            $payment = $_POST['payment'];
            $tname = $_POST['tname'];
            $username = $_SESSION["uname"];

            $sql = "INSERT INTO `tblbook` (`Passenger_name`, `Email`, `City`, `Phone_no`, `Pick_up`, `Drop_location`, `Taxi_name`, `Price_km`, `Total_price`, `username`, `Status`) VALUES ('$pname', '$email', '$city', '$phone', '$pickup', '$drop', '$tname', '$price_km', '$tprice', '$username', 'waiting');";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                header("Location:../booking.php");
            }
        }
    ?>
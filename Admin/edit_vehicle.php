<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Cab Admin | Edit Vehicle</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="cust_css/add_vehicle.css">
</head>

<body>
    <?php require("components/navbar.php") ?>
  

    <?php 
            
            if (isset($_POST['edit'])) {
                $id = $_POST['id'];
                $imgpath = $_FILES["v_image"]["name"];
                $v_name = $_POST['v_name'];
                $v_desc = $_POST['v_desc'];
                $price_km = $_POST['price_km'];
                $passanger = $_POST['passanger'];
                $luggage = $_POST['luggage'];
                $car_door = $_POST['car_door'];
                $heated_seat = $_POST['heated_seat'];
                $ac = $_POST['ac'];
                $base_price = $_POST['base_price'];
                $catagory = $_POST['catagory'];
        
                $sql = "UPDATE `tbltaxi` SET `taxi_description` = '$v_desc' ,`taxi_name`= '$v_name',`price_km` = '$price_km',`passanger` = '$passanger',`luggage` = '$luggage',`car_door` = '$car_door',`heated_seat` = '$heated_seat',`air_conditioner` = '$ac',`base_rate` = '$base_price',`category` = '$catagory',`taxi_image` = '$imgpath'  where `taxi_id` = '$id' ";
                $result = mysqli_query($conn,$sql);
                if($result)
                {
                    echo '<script>alert("Taxi Updated")</script>';
                }
            }
        ?>

</body>

</html>
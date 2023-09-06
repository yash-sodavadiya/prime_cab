<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Cab Admin | Add Vehicle</title>
    <link rel="stylesheet" href="cust_css/add_vehicle.css">
    <link rel="stylesheet" href="cust_css/navbar.css">

</head>
<body>
    <?php require("components/navbar.php") ?>
    <?php 
        if (isset($_POST['submit']))
        {
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

            $sql = "INSERT INTO `tbltaxi` (`taxi_name`, `taxi_image`, `taxi_description`, `price_km`, `passanger`, `luggage`, `car_door`, `heated_seat`, `air_conditioner`, `base_rate`, `category`) values('$v_name','$imgpath','$v_desc','$price_km','$passanger','$luggage','$car_door','$heated_seat','$ac','$base_price','$catagory')";
            $result = mysqli_query($conn,$sql);
            if(!$result)
            {
                echo "not insert";
            }
        }
    ?>
    
     <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="javascript/image_upload.js"></script> 
</body>
</html>
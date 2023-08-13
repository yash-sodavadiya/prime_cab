<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIME CAB | TAXI DETAILS</title>
    <link rel="stylesheet" href="CSS/taxi-details.css">
    <?php require("components/header_link.php") ?>
</head>

<body>
    <!-- navbar  -->
    <?php require("components/navbar.php") ?>

    <!-- banner  -->
    <div class="container-fluid about-banner">
        <h1>Taxi Details</h1>
        <p><a href="index.html">Home</a> / <span> Taxi Details </span></p>
    </div>

    <!-- deatils main container -->

    <?php 
        $id = $_GET['id'];
        // echo number_format($id);
        $sql = "SELECT * FROM tbltaxi where taxi_id = $id";
        $result = mysqli_query($conn,$sql);
        foreach($result as $row)
        { ?>
         <div class="taxi-details">
        <div class="details-left">
            <img src="images/card/<?php echo $row['taxi_image'] ?>" alt="">
        </div>
        <div class="details-right">
            <div class="price">
                <p>$<?php echo $row['price_km'] ?>/km</p>
            </div>
            <div class="taxi_name">
                <h3><?php echo $row['taxi_name'] ?></h3>
            </div>
            <div class="description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni distinctio esse nulla ipsa voluptatibus
                quisquam a pariatur minus similique eos.
            </div>
            <div class="features">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature">
                            <img src="images/card/card-passnger.svg" alt="">
                            <p class="car-text">CAR DOOR</p>
                            <div class="car-number">
                                <p>4</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature">
                            <img src="images/card/card-passnger.svg" alt="">
                            <p class="car-text">passanger</p>
                            <p class="car-number"><?php echo $row['passanger'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature">
                            <img src="images/card/card-passnger.svg" alt="">
                            <p class="car-text">LUGGAGE</p>
                            <p class="car-number"><?php echo $row["luggage's"] ?></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature">
                            <img src="images/card/card-passnger.svg" alt="">
                            <p class="car-text">HEATED SEAT</p>
                            <p class="car-number">4</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature">
                            <img src="images/card/card-passnger.svg" alt="">
                            <p class="car-text">AIR CONDITIONER</p>
                            <p class="car-number"><?php echo $row['air_conditioner'] ?></p>
                        </div>
                    </div>
                    <div class="col-sm-6"> </div>
                </div>

            </div>
            <div class="book-btn">
                <input type="submit" class="btn btn-subscribe button" name="submit" value="BOOK NOW">
            </div>

        </div>
    </div>
            
       <?php }
    ?>

   
    <?php require("components/footer.php") ?>
</body>

</html>
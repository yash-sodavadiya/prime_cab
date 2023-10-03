<?php
session_start();

?>
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

    <?php
    if (isset($_SESSION["uname"])) { ?>
        <?php require("components/navbar.php") ?>
        <!-- banner  -->

        <div class="container-fluid about-banner">
            <h1>Taxi Details</h1>
            <p><a href="index.php">Home</a> / <span> Taxi Details </span></p>
        </div>

        <!-- deatils main container -->

        <?php
        $id = $_GET['id'];
        // echo number_format($id);
        $sql = "SELECT * FROM tbltaxi where taxi_id = $id";
        $result = mysqli_query($conn, $sql);
        foreach ($result as $row) { ?>
            <div class="taxi-details">
                <div class="details-left">
                    <img src="images/card/<?php echo $row['taxi_image'] ?>" alt="">
                </div>
                <div class="details-right">
                    
                    <div class="taxi_name">
                        <h3 style="color:red;">
                            <?php echo $row['taxi_name'] ?>
                        </h3>
                    </div>
                    <div class="price">
                        <p>$
                            <?php echo $row['price_km'] ?>/km
                        </p>
                    </div>
                    <div class="description">
                        <?php echo $row["taxi_description"] ?>
                    </div>
                    <div class="features">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature">
                                    <img src="images/card/card-passnger.svg" alt="">
                                    <p class="car-text">CAR DOOR</p>
                                    <div class="car-number">
                                        <p>
                                            <?php echo $row["car_door"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature">
                                    <img src="images/card/card-passnger.svg" alt="">
                                    <p class="car-text">passanger</p>
                                    <p class="car-number">
                                        <?php echo $row['passanger'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature">
                                    <img src="images/card/card-passnger.svg" alt="">
                                    <p class="car-text">LUGGAGE</p>
                                    <p class="car-number">
                                        <?php echo $row["luggage"] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature">
                                    <img src="images/card/card-passnger.svg" alt="">
                                    <p class="car-text">HEATED SEAT</p>
                                    <p class="car-number">
                                        <?php echo $row["heated_seat"] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature">
                                    <img src="images/card/card-passnger.svg" alt="">
                                    <p class="car-text">AIR CONDITIONER</p>
                                    <p class="car-number">
                                        <?php echo $row['air_conditioner'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6"> </div>
                        </div>

                    </div>
                    <form action="booking.php" method="post">
                        <input type="hidden" name="image" id="" value="<?php echo $row['taxi_image'] ?>">
                        <input type="hidden" name="taxi_name" id="" value="<?php echo $row['taxi_name'] ?>">
                        <input type="hidden" name="price_km" id="" value="<?php echo $row['price_km'] ?>">
                        <input type="hidden" name="passanger" id="" value="<?php echo $row['passanger'] ?>">
                        <input type="hidden" name="luggage" id="" value="<?php echo $row["luggage"] ?>">
                        <input type="hidden" name="ac" id="" value="<?php echo $row['air_conditioner'] ?>">
                        <input type="hidden" name="baserate" id="" value="<?php echo $row['base_rate'] ?>">
                        <div class="book-btn">
                            <input type="submit" class="btn btn-subscribe button" name="submit" value="BOOK NOW">
                        </div>
                    </form>

                </div>
            </div>

        <?php }
        ?>


        <?php require("components/footer.php") ?>
    <?php } else {
        header("Location:login.php");
    }
    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.png" />
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/home.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
    <title>Taxi Service | Home</title>
    <script src="CSS/bootstrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>
<body>
<?php require("components/navbar.php")?>
<div class="car-card container-fluid">
        <div class="card-head">
            <p>OUR TAXI</p>
            <h1>Choose Our Taxi Collection</h1>
            <div class="car-menu">
                <ul>
                    <li> <form action="catagory.php" method="post"> <input type="hidden" name="cat" value="Auto"> <input type="submit" value="Auto" name="submit" id="auto"> </form></li><img src="images/card/card-line.png" alt="">
                    <li><form action="catagory.php" method="post"><input type="hidden" name="cat" value="bike"> <input type="submit" value="Bike" name="submit" id="bike"></form> </li><img src="images/card/card-line.png" alt="">
                    <li><form action="catagory.php" method="post"><input type="hidden" name="cat" value="Car"> <input type="submit" value="Car" name="submit" id="car"></form></li>
                </ul>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <div class="row">
<?php 
    if($_POST['submit'])
    {
        $catagory = $_POST['cat'];
    }
?>
    <?php
        $sql = "SELECT * FROM `tbltaxi` WHERE `category` = '$catagory'";
        $result = mysqli_query($conn , $sql);
        foreach ($result as $row) { ?>
            <div class="col-sm-3">
                <div class="car-card-1">
                    <div class="car-img">
                        <img src="images/card/<?php echo $row['taxi_image'] ?>" alt="">
                    </div>
                    <div class="car-title">
                        <h4><?php echo $row['taxi_name'] ?></h4>
                        <p>$<?php echo $row['price_km'] ?>/km</p>
                    </div>
                    <hr>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>passanger</p>
                        </div>
                        <div class="car-cap">
                            <p><?php echo $row['passanger'] ?></p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Luggage's:</p>
                        </div>
                        <div class="car-cap">
                            <p><?php echo $row["luggage's"] ?></p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Air conditioner</p>
                        </div>
                        <div class="car-cap">
                            <p><?php echo $row['air_conditioner'] ?></p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Base Rate:</p>
                        </div>
                        <div class="car-cap">
                            <p>$<?php echo $row['base_rate'] ?></p>
                        </div>
                    </div>
                    <div class="book-btn">
                        <button class="btn btn-subscribe">BOOK NOW</button>
                    </div>
                </div>
            </div>
        
        <?php }
?> 

</div>


</div>


</div>
<!-- <div class="col-sm-1"></div> -->
</div>
<script src="javascript/jquery.min.js"></script>
<script src="javascript/catagory.js"></script>
</body>
</html>

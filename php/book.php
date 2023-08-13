<!-- <?php require("../database/config.php")?> -->
<?php 
// echo "hello";
    if($_POST['submit'])
    {
        $image = $_POST['image'];
        $taxiname = $_POST['taxi_name'];
        $price_km = $_POST['price_km'];
        $passanger = $_POST['passanger'];
        $luggage = $_POST['luggage'];
        $ac = $_POST['ac'];
        $baserate = $_POST['baserate'];
        // header("Location: ../booking.php");
    }
?> 

<div class="book-right" align="justify">
            <div class="col-sm-2">
                <div class="car-card-1">
                    <div class="car-img">
                        <img src="../images/card/<?php echo $image; ?>" alt="not found">
                    </div>
                    <div class="car-title">
                        <h4><?php echo $taxiname; ?></h4>
                        <p>$<?php echo $price_km; ?>/km</p>
                    </div>
                    <hr>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>passanger</p>
                        </div>
                        <div class="car-cap">
                            <p><?php echo $passanger; ?></p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Luggage's:</p>
                        </div>
                        <div class="car-cap">
                            <p><?php echo $luggage; ?></p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Air conditioner</p>
                        </div>
                        <div class="car-cap">
                            <p><?php echo $ac; ?></p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Base Rate:</p>
                        </div>
                        <div class="car-cap">
                            <p><?php echo $baserate; ?></p>
                        </div>
                    </div>
                    <div class="book-btn">
                        <button class="btn btn-subscribe">BOOK NOW</button>
                    </div>
                </div>
            </div>

        </div>
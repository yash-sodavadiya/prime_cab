
<?php
if($_SERVER['REQUEST_URI'] =="/taxiservice/booking.php")
    { ?>
            <div class="col-sm-2">
                <div class="car-card-1">
                    <div class="car-img">
                        <img src="images/card/thar.jpg" alt="not found">
                    </div>
                    <div class="car-title">
                        <h4>Thar</h4>
                        <p>$20/km</p>
                    </div>
                    <hr>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>passanger</p>
                        </div>
                        <div class="car-cap">
                            <p>3</p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Luggage's:</p>
                        </div>
                        <div class="car-cap">
                            <p>3</p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Air conditioner</p>
                        </div>
                        <div class="car-cap">
                            <p>Yes</p>
                        </div>
                    </div>
                    <div class="main-card-content">
                        <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                        <div class="car-detail">
                            <p>Base Rate:</p>
                        </div>
                        <div class="car-cap">
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="book-btn">
                        <button class="btn btn-subscribe">BOOK NOW</button>
                    </div>
                </div>
            </div>

        </div> 

        <?php }?>

<?php
    if($_SERVER['REQUEST_URI'] == "/taxiservice/index.php")
    { ?>

        <div class="col-sm-3">
                            <div class="car-card-1">
                                <div class="car-img">
                                    <img src="images/card/<?php echo $row['taxi_image'] ?>" alt="">
                                </div>
                                <div class="car-title">
                                    <h4>
                                        <?php echo $row['taxi_name'] ?>
                                    </h4>
                                    <p>$
                                        <?php echo $row['price_km'] ?>/km
                                    </p>
                                </div>
                                <hr>
                                <div class="main-card-content">
                                    <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                                    <div class="car-detail">
                                        <p>passanger</p>
                                    </div>
                                    <div class="car-cap">
                                        <p>
                                            <?php echo $row['passanger'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="main-card-content">
                                    <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                                    <div class="car-detail">
                                        <p>Luggage's:</p>
                                    </div>
                                    <div class="car-cap">
                                        <p>
                                            <?php echo $row["luggage's"] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="main-card-content">
                                    <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                                    <div class="car-detail">
                                        <p>Air conditioner</p>
                                    </div>
                                    <div class="car-cap">
                                        <p>
                                            <?php echo $row['air_conditioner'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="main-card-content">
                                    <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                                    <div class="car-detail">
                                        <p>Base Rate:</p>
                                    </div>
                                    <div class="car-cap">
                                        <p>$
                                            <?php echo $row['base_rate'] ?>
                                        </p>
                                    </div>
                                </div>
                                <form action="booking.php" method="post">
                                    <input type="hidden" name="image" id="" value="<?php echo $row['taxi_image'] ?>">
                                    <input type="hidden" name="taxi_name" id="" value="<?php echo $row['taxi_name'] ?>">
                                    <input type="hidden" name="price_km" id="" value="<?php echo $row['price_km'] ?>">
                                    <input type="hidden" name="passanger" id="" value="<?php echo $row['passanger'] ?>">
                                    <input type="hidden" name="luggage" id="" value="<?php echo $row["luggage's"] ?>">
                                    <input type="hidden" name="ac" id="" value="<?php echo $row['air_conditioner'] ?>">
                                    <input type="hidden" name="baserate" id="" value="<?php echo $row['base_rate'] ?>">
                                    <div class="book-btn">
                                        <input type="submit" class="btn btn-subscribe button" name="submit"
                                            value="BOOK NOW">
                                    </div>
                                    <?php
                                        $id = $row['taxi_id'];
                                    ?>
                                    <div class="view-btn">
                                        <a href="taxi_details.php?id='<?php echo $id ?>'"><input type="button" class="view-button" name="submit"
                                            value="VIEW"></a>
                                    </div>
                                </form>
                            </div>
                        </div>    
<?php } ?> 
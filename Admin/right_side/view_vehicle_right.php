<div class="dashboard-top">
    <div class="left">
        <h1>View Vehicle</h1>
    </div>
    <div class="right">

        <i class="fa-solid fa-house-chimney-window" style="color: #000000;"></i>
        <span class="home"> <a href="Dashboard.php"> Home </a></span> <span> > </span> <span>View Vehicle</span>
    </div>
</div>
<hr>
    <?php
    $sql = "SELECT * FROM tbltaxi";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) { ?>

        <div class="card">
            <img src="../images/card/<?php echo $row['taxi_image'] ?>" alt="" />
            <div class="card-body">
                <div class="row">
                    <div class="card-title">
                        <h4>
                            <?php echo $row['taxi_name'] ?>
                        </h4>
                        <p>$
                            <?php echo $row['price_km'] ?>/km
                        </p>
                    </div>
                </div>
                <hr />
                <div class="main-card-content">
                    <div class="icon"><img src="../images/card/card-passnger.svg" alt=""></div>
                    <div class="car-detail">
                        <p>passanger</p>
                    </div>
                    <div class="car-cap">
                        <p id="passanger">
                            <?php echo $row['passanger'] ?>
                        </p>
                    </div>
                </div>
                <div class="main-card-content">
                    <div class="icon"><img src="../images/card/card-passnger.svg" alt=""></div>
                    <div class="car-detail">
                        <p>Luggage's:</p>
                    </div>
                    <div class="car-cap">
                        <p id="luggage">
                            <?php echo $row["luggage"] ?>
                        </p>
                    </div>
                </div>
                <div class="main-card-content">
                    <div class="icon"><img src="../images/card/card-passnger.svg" alt=""></div>
                    <div class="car-detail">
                        <p>Air conditioner</p>
                    </div>
                    <div class="car-cap">
                        <p id="ac">
                            <?php echo $row['air_conditioner'] ?>
                        </p>
                    </div>
                </div>
                <div class="main-card-content">
                    <div class="icon"><img src="../images/card/card-passnger.svg" alt=""></div>
                    <div class="car-detail">
                        <p>Base Rate:</p>
                    </div>
                    <div class="car-cap">
                        <p id="baserate">$
                            <?php echo $row['base_rate'] ?>
                        </p>
                    </div>
                </div>
                <form action="php/vehicle_delete.php" method="post">
                <?php 
                $tid = $row['taxi_id'];
                ?> 
                <input type="hidden" value="<?php echo $row['taxi_id'] ?>" name="tid">
                <div class="btn-group">
                <a href="edit_vehicle.php?id='<?php echo $tid ?>'"> <input type="button" class="button-29" id="edit" role="button" value="Edit"></a>
                <a href="">   <input type="submit" class="button-29" id="delete" role="button" name="submit" value="Delete" onClick=”window.location.reload(true)”> </a>
                </div>
    </form>
            </div>
        </div>
      
        
    <?php } ?>
    

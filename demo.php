<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("components/header_link.php")?>
    <link rel="stylesheet" href="CSS/taxi-details.css">
    <title>Document</title>
</head>
<body>
    <?php require("components/navbar.php") ?>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    
      <div class="modal-body" style="float:left;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <?php 
        $id = 2;
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    
  </div>
</div>
</body>
</html>

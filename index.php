<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.png" />
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="home.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/login.css">
    <title>Taxi Service | Home </title>
    <script src="CSS/bootstrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="javascript/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#tog").click(function () {
                $("div").removeClass("navbar-container");
            });
            $("#tog").click(function () {
                $("header").removeClass("fixed-top");
            });
        });
    </script>


    <style>
        .car-card-1 .book-btn input {
            width: 35% ;
            box-shadow: inset 0 0 0 0 #000 ;
            margin-top: 7px ;
            float: left;
            margin-left: 19px;
        }

        .car-card-1 .book-btn input:hover {
            box-shadow: inset 400px 0 0 0 #000 ;
            color: #fff;
        }
        .car-cap{
            width: 12%;
        }
        .view-btn input.view-button{
            background: black ;
            color: #fff;
            float: right;
            text-align: center;
            width: 35%;
            font-size: 13px;
            border: 2px solid black;
            padding: 0px;
            border-radius: 0px;
            margin-top: 7px;
            font-weight: 700;
            height: 30px;

        }
        .view-btn input.view-button:hover{
            border: 2px solid red;
        }



        
    </style>
</head>

<body>
    <!-- Button trigger modal -->

    <?php require("components/navbar.php") ?>


    <!--  main context -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="container1">
                <div class="carousel-item active" data-bs-interval="3500">
                    <img src="images/car-1.jpg" class="d-block w-100 image" alt="..." />
                    <div class="centered">
                        <h1 class="banner-h1">Good Services is Our Passion</h1>
                        <h1 class="banner-title">Awsome Taxi</h1>
                        <div class="line2"></div>
                        <p class="banner-text">
                            No matter what the weather, no matter what the situation we are
                            in, if we have the right perspective in life, life will always
                            be beautiful!
                        </p>
                        <center>
                            <div class="banner-btn">Book Now</div>
                        </center>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3500">
                    <img src="images/car-1.jpg" class="d-block w-100 image" alt="..." />
                    <div class="centered">
                        <h1 class="banner-h1">Good Services is Our Passion</h1>
                        <h1 class="banner-title">Awsome Taxi</h1>
                        <div class="line2"></div>
                        <p class="banner-text">
                            No matter what the weather, no matter what the situation we are
                            in, if we have the right perspective in life, life will always
                            be beautiful!
                        </p>
                        <center>
                            <div class="banner-btn">Book Now</div>
                        </center>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3500">
                    <img src="images/car-1.jpg" class="d-block w-100 image" alt="..." />
                    <div class="centered">
                        <h1 class="banner-h1">Good Services is Our Passion</h1>
                        <h1 class="banner-title">Awsome Taxi</h1>
                        <div class="line2"></div>
                        <p class="banner-text">
                            No matter what the weather, no matter what the situation we are
                            in, if we have the right perspective in life, life will always
                            be beautiful!
                        </p>
                        <center>
                            <div class="banner-btn">Book Now</div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- search car  -->
    <div class="container-fluid search-section">
        <div class="search-title">
            <h1>SEARCH YOUR TAXI</h1>
            <hr>
        </div>
        <div class="row search-main-row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <!-- upper row  -->
                <div class="row">
                    <div class="col-sm-4">
                        <label for="" class="form-label">Pick Up</label>
                        <input type="text" class="form-control search-control first-row" />
                    </div>
                    <div class="col-sm-4">
                        <label for="" class="form-label">Drop Up</label>
                        <input type="text" class="form-control search-control first-row" />
                    </div>
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="" class="form-label" style="width: 50%">Adult</label>
                                <input type="number" class="form-control search-control" />
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="form-label" style="width: 50%">Kids</label>
                                <input type="number" class="form-control search-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label for="" class="form-label">Promo code</label>
                        <input type="text" class="form-control search-control first-row" />
                    </div>
                </div>

                <!-- down row  -->
                <div class="row">
                    <div class="col-sm-4">
                        <label for="" class="form-label">Pick Up date/time</label>
                        <div class="row">
                            <div class="col-sm-6">

                                <input type="date" class="form-control search-control select-date" />
                            </div>
                            <div class="col-sm-6">
                                <select name="timeing" id="txttimeing" class="select-time-date search-control">
                                    <option value="">anytime</option>
                                    <option value="">Morning</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="" class="form-label">Drop Up date/time</label>
                        <div class="row">
                            <div class="col-sm-6">

                                <input type="date" class="form-control search-control select-date" />
                            </div>
                            <div class="col-sm-6">
                                <select name="timeing" id="txttimeing" class="select-time-date search-control">
                                    <option value="">anytime</option>
                                    <option value="">Morning</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label for="" class="form-label" style="padding-bottom: 5px;">Car Type</label>
                        <!-- <div class="row"> -->
                        <!-- <div class="col-sm-6"> -->
                        <select name="timeing" id="txttimeing" class="select-time form-control search-control"
                            style="padding: 0px; padding-left: 10px;">
                            <option value="">anytime</option>
                            <option value="">Morning</option>
                        </select>
                    </div>
                    <div class="col-sm-2" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                        <label for="" class="form-label" style="color: black; font-size: 16px;">hello</label>
                        <button class="btn btn-primary search-control search-btn" type="submit">Search</button>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    </div>

    <!-- our catagory  -->
    <div class="container catagory-main">
        <div class="catagory-title">
            <center>
                <h1>Our <span class="title-span">Catagory</span></h1>
                <div class="line"></div>
                <p>Find Your Cab As Per Requirment</p>
            </center>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-6 catagory">
                        <img src="images/main-icons/auto.jpg" class="catagory-auto catagory-img" alt="auto">
                        <div class="bottom-left">
                            <h3>Auto-Rikshaw</h3>
                            <p style="display: none;" class="catagory-text">10place</p>
                        </div>
                    </div>
                    <div class="col-sm-6  catagory">
                        <img src="images/main-icons/bike.jpg" class="catagory-auto catagory-img" alt="auto">
                        <div class="bottom-left">
                            <h3>Bike</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 catagory">
                        <img src="images/main-icons/economy-car.jpg" class="catagory-img" alt="" style="height: 200px;
                        width: 103.6%;
                        margin-top: 9px;">
                        <div class="bottom-left">
                            <h3>Affordable</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 catagory">
                <img src="images/main-icons/luxury-car.jpg" class="catagory-right catagory-img" alt="">
                <div class="bottom-left">
                    <h3>Luxury</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- our services  -->
    <div class="container catagory-main">
        <div class="catagory-title">
            <center>
                <h1>Our <span class="title-span">Services</span></h1>
                <p>Best Taxi Service For You</p>
            </center>
        </div>
        <div class="row">
            <div class="col-sm-4 our-service-card">
                <div class="card" style="width: 18rem;">
                    <img src="images/car-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Business Tranport</h3>
                        <p class="card-text">Business Tranport refer to the tranportaion service and metod used by
                            business to move Good Equipment</p>
                        <a href="#" style="color: red;">Learn more -></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 our-service-card">
                <div class="card" style="width: 18rem;">
                    <img src="images/car-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Rapid City Tranport</h3>
                        <p class="card-text">Business Tranport refer to the tranportaion service and metod used by
                            business to move Good Equipment</p>
                        <a href="#" style="color: red;">Learn more -></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 our-service-card">
                <div class="card" style="width: 18rem;">
                    <img src="images/car-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Rapid City Tranport</h3>
                        <p class="card-text">Business Tranport refer to the tranportaion service and metod used by
                            business to move Good Equipment</p>
                        <a href="#" style="color: red;">Learn more -></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- car card  -->

    <div class="car-card container-fluid">
        <div class="card-head">
            <p>OUR TAXI</p>
            <h1>Choose Our Taxi Collection</h1>
            <div class="car-menu">
                <ul>
                    <li>
                        <form action="catagory.php" method="post"> <input type="hidden" name="cat" value="Auto"> <input
                                type="submit" class="active" value="Auto" name="submit" id="auto"> </form>
                    </li><img src="images/card/card-line.png" alt="">
                    <li>
                        <form action="catagory.php" method="post"><input type="hidden" name="cat" value="bike"> <input
                                type="submit" value="Bike" name="submit" id="bike"></form>
                    </li><img src="images/card/card-line.png" alt="">
                    <li>
                        <form action="catagory.php" method="post"><input type="hidden" name="cat" value="Car"> <input
                                type="submit" value="Car" name="submit" id="car"></form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                <div class="row">
                <?php require("query.php")
                        ?>
                    <?php
                    //  $sql = "SELECT * from tbltaxi";
                    $result = mysqli_query($conn, $sql);
                    foreach ($result as $row) { ?>
                        <?php require("components/card.php")?>
                    <?php } ?>
                </div>


            </div>
        </div>
        <!-- <div class="col-sm-1"></div> -->
    </div>

    <!-- footer  -->
    <?php require("components/footer.php") ?>
    

    <!-- manual javascript -->

    <script src="javascript/catagory.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
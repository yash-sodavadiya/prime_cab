<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<title>Document</title>

<div class="navbar-top">
    <div class="nav-top-left">
        <img src="../images/main-icons/logo.png" alt="">
        <h3>prime cab</h3>
    </div>
    <div class="nav-top-middle">
        <ul>
            <li>
                <i class="fa-solid fa-bars" style="color: #000000;"></i>
            </li>
        </ul>
       
    </div>
    <div class="nav-top-right" >
        
            <h2>Welcome , <?php echo $_SESSION["adminname"] ?></h2>
    </div>
</div>
<div class="main-container container-fluid">
    <div class="left-side">
        <ul>
            <li class="active">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAVUlEQVR4nO2WsQ2AQAzEvP++rmEBBM1D9MLF9ZacXIJ6TIYATIEXgwGvZD8AV61aACxQwI3TJ98BkALqAVrDoyJi+yq2c+zAQ8L0S8YUgB+GAPy7ghNFeY45lgPZQQAAAABJRU5ErkJggg==">
                <a href="Dashboard.php">Dashboard</a>
            </li>
            <li id="trip" class="<?php echo basename($_SERVER['PHP_SELF']) == ('active_trip.php' || 'complate_trip.php' || 'trip_book.php') ? 'active' : ''; ?>">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAtklEQVR4nO2QOwrCUBBFTxN0FSII2Y5uRittNHEpug9ttRO3IX6w9MmDEeQVk5lEIUUuXEhx7hxeoEtbswKeQDA2skvr8QHwchwP0rgZWgQzGWwcL97KZmqBjwKPHYKJbA5V4EjAK9B3CHrARba5Bi5q/PuQdK4JTj8QnDXBB8rwJ/vaVwpi1sADKBU+ZVyCu3zfFD5lXIJSDhQKnzIuQZ0Eq6Bp2yHwJli2ewF27vM02nbhf3kDNiWazfhHvfEAAAAASUVORK5CYII=">
                <a href="#"><?php if( basename($_SERVER['PHP_SELF']) == 'active_trip.php') {echo "Active Trips"; } elseif( basename($_SERVER['PHP_SELF']) == 'Cancle_trip.php') {echo "Cancle Trip"; } elseif( basename($_SERVER['PHP_SELF']) == 'trip_book.php') {echo "Booked trip"; } else{echo "Trip";} ?></a>
                <i class="fa-solid fa-chevron-right"  style="padding-left: 104px; width: 16px;"></i>   
                <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAXklEQVR4nGNgGAV0Atr0sKSBgYHhDwMDQwytLfkPxTSzTIeBgeE3kkX/ofxwWlgWgsWyP7Ty2ahlVAEhwzLOQnFYFD1qCTYwGlyDt1Atp2USxmYZzS2ha1U+ChiQAQBcwlo7f7bkkQAAAABJRU5ErkJggg==" style="padding-left: 104px; width: 16px;"> -->
                <ul class="sub-menu" id="trip-sub-menu">
                    <li><a href="active_trip.php">Active Trip</a></li>
                    <li><a href="Cancle_trip.php">Cancle Trip</a></li>
                    <li><a href="trip_book.php">Booked Trips</a></li>
                </ul>
            </li>
            
            <li id="vehicle" class="<?php if( basename($_SERVER['PHP_SELF']) == ('add_vehicle.php' || 'view_vehicle.php' || 'edit_vehicle.php') ) { echo 'active'; } else{echo '';}  ?>">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABuklEQVR4nO2Wvy9DURTHP4j+BTVIX0U7GMRkEGG0EgmLGCw2O4tNIp3EwCQx6NAOBgmtkPgLjBaDtRQDSYPBr0rlPHlp+n5J72vJ+SRnue+dc7/f3nfOLSiKoiiKoiiKoijG6QCWgWugaiBegHNgEeg0aWTJkIFGsQ90mzARBx5kkwU5HRt787DU58XlNCqyvoMBtqX4aQBBQXHLGwGe5VntU24ag8Ab8A4MhRDkh1feDPABfAJzNIkT2XDrF4K88MtbcQyB0bDFh4EN4FAmiKkJFTYqwDGwBkwBvV4mJoHXNhAdNErAAbAKTABdtpELeWEXmJbjtIAYracPmAUywBnw2MDYJdCPNHO1TYT7URv/A8A8sAlcifYj6tz9NXpE99NfN1J1anczkQbywL1EXtaiJO2jwddICrht0Fhlu7EiIBVQw49++84YczzMyloBSEgUZG0vIiNZRyO7aRh3jOTv0eY2s2vJNlaL7o2EQ0PS5Z11ZOxmXG7zZIAipsPy0FASEzG/Yy1KIUv+KrTi0yo4NBTDakhJU9X/OjcRN3u5GRpqYy4H3EnkpHiUpNtAg6IoiqIoisI/4QsmWl3TW5d2rQAAAABJRU5ErkJggg==">
                <a href="#"><?php if( basename($_SERVER['PHP_SELF']) == 'add_vehicle.php') {echo "Add Vehicle"; } elseif( basename($_SERVER['PHP_SELF']) == 'view_vehicle.php') {echo "View Vehicle"; } elseif( basename($_SERVER['PHP_SELF']) == 'edit_vehicle.php') {echo "Edit Vehicle"; } else{echo "Vehicle";} ?></a>
                <i class="fa-solid fa-chevron-right" id="vehicle-icon" style="padding-left: 86px; width: 16px;"></i>   
                <ul class="sub-menu" id="vehicle-sub-menu">
                    <li><a href="add_vehicle.php">Add Vehicle Details</a></li>
                    <li><a href="view_vehicle.php">View All Vehicle</a></li>
                </ul>
            </li>
           
        </ul>
    </div>
    <?php require("database/config.php") ?>
     <div class="right-side" style="height:100vh;">
    <?php
    if($_SERVER['REQUEST_URI'] == "/taxiservice/admin/Dashboard.php" )
    {
         require("right_side/home-right.php");
    }
    elseif($_SERVER['REQUEST_URI'] == "/taxiservice/admin/add_vehicle.php" )
    {
         require("right_side/add_vehicle_right.php");
    }
    elseif($_SERVER['REQUEST_URI'] == "/taxiservice/admin/view_vehicle.php")
    {
        require("right_side/view_vehicle_right.php");
    }
    elseif($_SERVER['REQUEST_URI'] == "/taxiservice/admin/trip_book.php")
    {
        require("right_side/book_trip_right.php");
    }
    elseif($_SERVER['REQUEST_URI'] == "/taxiservice/admin/active_trip.php")
    {
        require("right_side/active_trip_right.php");
    }
    elseif($_SERVER['REQUEST_URI'] == "/taxiservice/admin/Cancle_trip.php")
    {
        require("right_side/cancle_trip_right.php");
    }
    else
    {
        require("right_side/edit_vehicle_right.php");
    }
    ?>
    </div>
   
</div>
<script>
    $(document).ready(function () {
        $("#drop-down-profile").click(function () {
            $("#down-menu").show();
        });
        $(".main-container").click(function () {
            $("#down-menu").hide();
        });
            $("#trip").click(function () {
                $("#trip-sub-menu").toggle()
            });
            $("#vehicle").click(function () {
                $("#vehicle-sub-menu").toggle()
            });
    });
</script>
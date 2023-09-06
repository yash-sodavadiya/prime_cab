<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/taxi.css">
    <link rel="stylesheet" href="css/main-card.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>  -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script> -->
    <!-- <script src="fillter.js"></script> -->
    <style>
        .car-card-1 .book-btn input {
            width: 38%;
            box-shadow: inset 0 0 0 0 #000;
            margin-top: 7px;
            float: left;
            margin-left: 19px;
        }

        .car-card-1 .book-btn input:hover {
            box-shadow: inset 400px 0 0 0 #000;
            color: #fff;
        }

        .car-cap {
            width: 12%;
        }

        .view-btn input.view-button {
            background: black;
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

        .view-btn input.view-button:hover {
            border: 2px solid red;
        }
    </style>
    <?php require("components/header_link.php") ?>

    <title>PRIME CAB | TAXI</title>
</head>

<body>
    <!-- navbar      -->
    <?php require("components/navbar.php") ?>
    <div class="container-fluid about-banner">
        <h1>Taxi</h1>
        <p><a href="index.html">Home</a> / <span> Taxi </span></p>
    </div>

    <!-- main content  -->

    <div class="container-fluid" style=" background-color: whitesmoke;">
        <div class="container taxifull">
            <div class="taxi-top">
                <h3>Taxi</h3>
                <div class="top-right">
                    <p>Sort by type</p>
                    <select name="taxi-type" id="taxi">
                        <option value="" selected="selected">All</option>
                        <?php
                        $sql = "SELECT DISTINCT category from tbltaxi";
                        $result = mysqli_query($conn, $sql);
                        foreach ($result as $row) { ?>
                            <option value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="taxi-bottom car-card">
                <div class="row">
                    <?php require("query.php")
                        ?>
                        
                    <?php
                    $sql = "SELECT * from tbltaxi";
                    $result = mysqli_query($conn, $sql);
                    foreach ($result as $row) { ?>
                        <?php require("components/card.php") ?>
                    <?php } ?>

                </div>
            </div>

            <!-- footer  -->
            <?php require("components/footer.php") ?>
            <script src="javascript/jquery.min.js"></script>

</body>

</html>
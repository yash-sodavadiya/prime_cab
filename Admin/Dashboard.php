<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="cust_css/circle.css">
    <link rel="stylesheet" href="   dashboard.css">
    <link rel="stylesheet" href="book_trip.css">
    <style>
        .my-head{
            width: 300px;
    height: 300px;
    background: red;
    border-radius: 20px;
        }
        .card{
            background: red;
    padding: 20px;
    text-align: center;
    font-size: 26px;
    border-radius: 18px;
        }
        .card-header p{
    color: #fff;
    font-weight: bold;
    font-size: 39px;
        }
        .card-header h3{
            font-size: 40px;
    color: #fff;
        }
        .card-icon img{
            width: 200px;
    mix-blend-mode: darken;
    height: 200px;
        }
        .tbl h1{
            margin-left: 15px;
    font-size: 25px;
    font-family: inherit;
        }
        .tbl{
            padding-bottom: 20px;
        }
    </style>
    <!-- <?php require("components/header_link.php") ?> -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body>
    <?php require("components/navbar.php") ?>
   

</body>

</html>
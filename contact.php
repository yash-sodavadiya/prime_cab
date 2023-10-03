<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require("components/header_link.php") ?>
    <link rel="stylesheet" href="CSS/contact.css">
    
    <title>Taxi Service | Contact Us</title>
    <script src="CSS/bootstrap/bootstrap.min.js"></script>
    
</head>

<body>
    <!-- Button trigger modal -->

    <!-- navbar section  -->
    <?php require("components/navbar.php"); ?>

    <div class="container-fluid about-banner">
        <h1>Contact Us</h1>
        <p><a href="index.php" >Home</a> / <span> Contact Us </span></p>
    </div>
    <!-- main content  -->
    <div class="container" style="margin-top:80px; padding-bottom: 20px;">
        <div class="row">
            <div class="col-sm-4">
                <img src="images/contact_1_1.jpg" alt="Not found" width="100%">
                <div class="con-number" style="border: 1px solid lightgrey; height: 136px;">
                    <div class="imges">
                        <img src="images/number.jpg" alt="not found" height="90px" style="margin-top: 27px;">
                        <SPAN style="font-size: 12px; color: orange; font-weight: bold;"> CALL US 24/7 </SPAN>
                        <div style="margin-left: 91px; margin-top: -42px; font-size: 15px; font-weight: bold;">+919824764583</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="images/contact_1_2.jpg" alt="Not found" width="100%">
                <div class="con-number" style="border: 1px solid lightgrey; height: 136px;">
                    <div class="imges">
                        <img src="images/email-logo.jpg" alt="not found" height="90px"
                            style="    margin-top: 27px; margin-left: 10px; margin-right: 10px;">
                        <SPAN style="font-size: 12px; color: orange; font-weight: bold;"> EMAIL ID </SPAN>
                        <div style="margin-left: 102px; margin-top: -42px; font-size: 15px; font-weight: bold;">
                        primecab@gmail.com</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="images/contact_1_3.jpg" alt="Not found" width="100%">
                <div class="con-number" style="border: 1px solid lightgrey; height: 136px;">
                    <div class="imges">
                        <img src="images/contact_map.jpg" alt="not found" height="90px"
                            style="    margin-top: 27px; margin-left: 10px; margin-right: 10px;">
                        <SPAN style="font-size: 12px; color: orange; font-weight: bold;"> LOCATION </SPAN>
                        <div style="margin-left: 108px; margin-top: -42px; font-size: 15px; font-weight: bold;">SDJ International collage, Vesu, Surat, Gujarat.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

     <!-- footer  -->
    <?php require("components/footer.php") ?>

</body>

</html>
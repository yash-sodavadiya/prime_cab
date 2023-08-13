<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require("components/header_link.php") ?>
    <link rel="stylesheet" href="CSS/about.css">
    
    <title>Taxi Service | About Us</title>
    <script src="CSS/bootstrap/bootstrap.min.js"></script>
    
</head>

<body>
    <!-- Button trigger modal -->

    <!-- navbar section  -->
    <?php require("components/navbar.php"); ?>

    <div class="container-fluid about-banner">
        <h1>About Us</h1>
        <p><a href="index.html" >Home</a> / <span> About Us </span></p>
    </div>
    <!-- main content  -->
    <div class="container main-content">
        <div class="row">
            <div class="col-sm-6">
                <img src="images/about_pic1.jpg" class="img-1" alt="about1">
                <img src="images/about_pic2.jpg" alt="about2" class="img-2">
                <div class="left-bottom">
                    <h3>STARTED JOURNEY</h3>
                    <p>2023</p>
                </div>
            </div>
            <div class="col-sm-6 about-right">
                <p class="about-title">ABOUT OUR COMPANY</p>
                <h2>Wherever You Need To Go We'll Take You There.</h2>
                <p class="description">
                    Authoritatively simplify open-source resources via backend visualize business e-markets before parallel convergence optimize sticky and idea-sharing rather than unique solutions.
                </p>
                <div class="right-bottom">
                <img src="images/about_map.jpg" alt="">
                <div class="check-list">
                    <ul>
                        <li>Easy & Emergancy Solution Anytime.</li>
                        <li>Getting Affordable price upto 2 years</li>
                        <li>More Reliable & Experienced Teams</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>

     <!-- footer  -->
    <?php require("components/footer.php") ?>

</body>

</html>
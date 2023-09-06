<!-- header link  -->


<!-- navbar section  -->
<header>
        <div class="header-top">
            <div class="header-top-left navbar navbar-expand-md navbar-light my-nav">
                <a class=" cust-brand logo" href="#">Prime Cab</a><br>
            </div>
            <div class="header-top-right">
                <button type="button" class="btn btn-dark btn-booking">
                   <a href="booking.php" style="color:#fff; text-decoration:none;"> Book Now </a>
                </button>
            </div>
        </div>

        <div class="navbar-container">
            <nav class="navbar navbar-expand-md navbar-light my-nav">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" id="tog" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="taxi.php">Taxi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        <form action="index.php" class="d-flex">
                            <button class="btn btn-outline-success btn-login" id="btnlogin" type="button"
                                data-toggle="modal" data-target="#exampleModalCenter">
                                Login
                            </button>
                            <button class="btn btn-outline-success btn-register" id="btnregister" type="submit">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <?php require("database/config.php") ?>

    <?php require("components/login.php") ?>

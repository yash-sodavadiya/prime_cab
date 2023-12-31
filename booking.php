<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Cab | booking</title>
    <link rel="stylesheet" href="booking.css">
    <style>
        .result p{
            font-size: 13px;
    color: black;
    border: 1px solid #3a3d40;
    border-top: none;
        }
    </style>
    <?php include("components/header_link.php") ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
$(document).ready(function()
{
    $('.search-box input[type="text"]').on("keyup input", function()
	{
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length)
		{
            $.get("backend-search.php", {term: inputVal}).done(function(data)
			{
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } 
		else
		{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function()
	{
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>



</head>

<body >

<?php
    if (isset($_SESSION["uname"])) { ?>

    <!-- navbar -->
    <?php require("components/navbar.php") ?>
    <!-- banner  -->
    <div class="container-fluid about-banner">
        <h1>Booking</h1>
        <p><a href="index.php">Home</a> / <span> Booking </span></p>
    </div>

    <!-- main content  -->

    <div class="book-container">
        <div class="book-left search-section" align="justify">
            <p>Your personal information</p>

            <form action="php/booking.php" method="post">
                <div class="row search-main-row">
                    <div class="col-sm-6">
                        <label for="" class="cust-label">First Name:</label>
                        <input type="text" class="book-input form-control" name="pname" placeholder="First Name" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="cust-label">Email id:</label>
                        <input type="email" class="book-input form-control" name="email" placeholder="Email Id"  required>
                    </div>
                </div>

                <div class="row search-main-row">
                    <div class="col-sm-6">
                        <label for="" class="cust-label">City:</label>
                        <input type="text" class="book-input form-control" name="city" placeholder="City"  required>
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="cust-label">Phone No:</label>
                        <input type="number" class="book-input form-control" name="phone" placeholder="Enter Phone number"  required/>
                    </div>
                </div>

                <hr>
                <p >Your Trip Information</p>

                <div class="row search-main-row">
                    <div class="col-sm-6 search-box">
                        <label for="" class="cust-label">Pick Up:</label>
                        <input type="text" class="book-input form-control" autocomplete="off" name="pickup"  required placeholder="Enter Pick Up Loaction" />
                        <div class="result" style="width: 259px; margin-left: 15px;"></div>
                    </div>
                    <div class="col-sm-6 search-box">
                        <label for="" class="cust-label">Drop:</label>
                        <input type="text" class="book-input form-control" autocomplete="off"  required name="drop" placeholder="Enter Drop Location" />
                        <div class="result" style="width: 259px; margin-left: 15px;"></div>
                    </div>
                </div>

                <div class="row search-main-row">
                    <?php
                    if (isset($_POST['submit'])) {
                        $price_km = $_POST['price_km'];
                        ?>
                        <div class="col-sm-6">
                            <label for="" class="cust-label">Price Per km:</label>
                            <input type="number" class="book-input form-control" name = "price_km"   value="<?php echo $price_km; ?>"
                                placeholder="price per km" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="col-sm-6">
                            <label for="" class="cust-label">Price Per km:</label>
                            <input type="number" class="book-input form-control" name="price_km"   value="0" placeholder="price per km"
                                disabled />
                        </div>
                    <?php } ?>
                    <?php
                    if (isset($_POST['submit'])) {
                        $price_km = $_POST['price_km'];
                        $total = $price_km * 6;
                        ?>
                    <div class="col-sm-6 search-box">
                        <label for="" class="cust-label">Total Price:</label>
                        <input type="text" class="book-input form-control" name="tprice" value="<?php echo $total ;?>" readonly required placeholder="Total Price"/>
                        
                    </div>
                    <?php } ?>
                </div>
                
                <hr>
                <hr >
                <p>Your Payment Information</p>

                <div class="row search-main-row">
                    <div class="col-sm-12">
                        <label for="" class="cust-label" style="margin-right:10px;"  required>Payment Type:</label>
                        <select name="payment" id="" style="height: 23px; font-size: 12px; width: 78%; text-align: center;">
                            <option value="Select">Select type</option>
                            <option value="Cash">Cash</option>
                            <option value="Debit Card">Debit Card</option>
                            <option value="Creadit Card">Creadit Card</option>
                            <option value="UPI">UPI</option>
                            <option value="Net Banking">Net Banking</option>
                        </select>        
                    </div>
                </div>
                <hr>
                <div class="confirm">
                    <input type="checkbox"  required> <span class="confirm"> You want to confirm booking.</span>
                </div>
            
        </div>

        <div class="book-right" align="justify">


            <?php
            if (isset($_POST['submit'])) {
                $image = $_POST['image'];
                $taxiname = $_POST['taxi_name'];
                $price_km = $_POST['price_km'];
                $passanger = $_POST['passanger'];
                $luggage = $_POST['luggage'];
                $ac = $_POST['ac'];
                $baserate = $_POST['baserate'];
                ?>

                <div class="col-sm-2">
                    <div class="car-card-1">
                        <div class="car-img">
                            <img src="images/card/<?php echo $image; ?>" alt="not found">
                        </div>
                        <div class="car-title">
                            <h4 style="color:red;">
                                <?php echo $taxiname; ?>
                            </h4>
                            <p>$
                                <?php echo $price_km; ?>/km
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
                                    <?php echo $passanger; ?>
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
                                    <?php echo $luggage; ?>
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
                                    <?php echo $ac; ?>
                                </p>
                            </div>
                        </div>
                        <div class="main-card-content">
                            <div class="icon"><img src="images/card/card-passnger.svg" alt=""></div>
                            <div class="car-detail">
                                <p>Base Rate:</p>
                            </div>
                            <div class="car-cap">
                                <p>
                                    <?php echo $baserate; ?>
                                </p>
                            </div>
                        </div>
                        <div class="book-btn">
           
                            <input type="hidden" value="<?php echo $taxiname; ?>" name="tname">
                            <button class="btn btn-subscribe" type="submit" name="book">BOOK NOW</button>
                            
                        </div>
                    </div>
                </div>
                </form>

            <?php } else { ?>
                <?php require("query.php") ?>
                <?php
                $result = mysqli_query($conn, $sql);
                foreach ($result as $row) { ?>
                    <?php require("components/card.php") ?>
                <?php } ?>
            <?php }
            ?>
        </div>

        <!-- <div class="help">
            <h3>Need Help?.</h3>
            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
            <div class="contect">
                <div class="contact-des">
                    <img src="images/footer/footer-phone.png" alt="">
                    <P class="contact"> +919824764583 </P>
                </div>

                <div class="contact-des">
                    <img src="images/footer/footer-email.png" alt="">
                    <P class="contact"> primecab@gmail.com </P>
                </div>
            </div>
        </div> -->
    </div>


    </div>
    <?php require("components/footer.php"); ?>
   <?php }
    else{
        header("Location:login.php");
    }
   ?>



          <!-- footer  -->
    
   



  



</body>

</html>
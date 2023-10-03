<div class="dashboard-top">
    <div class="left">
        <h1>Add Vehicle</h1>
    </div>
    <div class="right">

        <i class="fa-solid fa-house-chimney-window" style="color: #000000;"></i>
        <span class="home"> <a href="Dashboard.php"> Home </a></span> <span> > </span> <span>Add Vehicle</span>
    </div>
</div>
<div class="main-content">
    <div class="add-top">
        <h3>Add Vehicle</h3>
    </div>
    <div class="add-bottom">
        <form action="add_vehicle.php" enctype="multipart/form-data" method="post">
            <div class="form">
                <input type="text" id="vahecle_name" name="v_name" class="form_input" autocomplete="off">
                <label for="vehicle_name" class="form_label">Vehicle Name</label>
            </div>
            <div class="form">
                <input type="text" id="vahecle_description" name="v_desc" class="form_input" autocomplete="off">
                <label for="" class="form_label">Vehicle Description</label>
            </div>
            <div class="form">
                <input type="number" id="price_km" name="price_km" class="form_input" autocomplete="off">
                <label for="" class="form_label">Price per $/KM</label>
            </div>
            <div class="form">
                <input type="number" id="passanger" name="passanger" class="form_input" autocomplete="off">
                <label for="" class="form_label">Passanger</label>
            </div>
            <div class="form">
                <input type="number" id="luggage" name="luggage" class="form_input" autocomplete="off">
                <label for="" class="form_label">Luggage</label>
            </div>
            <div class="form">
                <input type="number" id="car_door" name="car_door" class="form_input" autocomplete="off">
                <label for="" class="form_label">Car Door</label>
            </div>
            <div class="form">
                <input type="number" id="heated_seat" name="heated_seat" class="form_input" autocomplete="off">
                <label for="" class="form_label">Heated Seat</label>
            </div>
            <div class="form">
                <input type="text" id="ac" name="ac" class="form_input" autocomplete="off">
                <label for="" class="form_label">Air Conditioner</label>
            </div>
            <div class="form">
                <input type="number" id="base_price" name="base_price" class="form_input" autocomplete="off">
                <label for="" class="form_label">Base Price</label>
            </div>
            <div class="form">
                <select name="catagory" id="catagory" class="form_input">
                    <option value="Auto">Auto</option>
                    <option value="Bike">Bike</option>
                    <option value="Car">Car</option>
                    <option value="Luxury car">Luxury Car</option>
                </select>
                <label for="" class="form_label">Catagory</label>
            </div>
            <div class="form">
                <input type="file" id="v_image" style="width: 70vw;" name="v_image" class="form_input"
                    autocomplete="off">
                <label for="" class="form_label">Vehicle Image</label>
            </div>
            <div class="form">
                <input type="submit" value="Upload" class="form_input form_btn" name="Submit1">

            </div>

            <div class="form">
                <input type="submit" value="Add" class="form_input form_btn" name="submit">

            </div>
            <div class="form">
                <input type="reset" value="Cancle" style="margin-left:0px" class="form_input form_btn form_remove"
                    name="reset">

            </div>

        </form>
    </div>

   
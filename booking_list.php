<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Cab | My Booking</title>
    <link rel="stylesheet" href="booking_list.css">
    <?php require("components/header_link.php") ?>

</head>
<body>
    <?php require("components/navbar.php") ?>
<table class="content-table">
        <thead>
          <tr>
            <th>Booking Id</th>
            <th>Passenger Name</th>
            <th>Email Id</th>
            <th>Phone Number</th>
            <th>Pick Up</th>
            <th>Drop</th>
            <th>Price</th>
            <th>Total Price</th>
            <th>Pyment Type</th>
            <th>Status</th>
        
          </tr>
        </thead>
        <tbody>
        <?php 
            $username = $_SESSION["uname"];
            $sql = "SELECT * FROM tblbook where `username` = '$username' ";
            $result = mysqli_query($conn,$sql);
            foreach($result as $row)
            {?>
                
          <tr>
            <td><?php echo $row['Booking_id'] ?></td>
            <td><?php echo $row['Passenger_name'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Phone_no'] ?></td>
            <td><?php echo $row['Pick_up'] ?></td>
            <td><?php echo $row['Drop_location'] ?></td>
            <td><?php echo $row['Taxi_name'] ?></td>
            <td><?php echo $row['Price_km'] ?></td>
            <td><?php echo $row['Total_price'] ?></td>
            <td><button class="<?php if($row['Status'] == "Active" || $row['Status'] == "active"){echo "Done";}elseif($row['Status'] == "Waiting" || $row['Status'] == "waiting"){echo "waiting";}else{echo "no";} ?>" style="width:100px"><?php echo $row['Status'] ?></button></td>
           
          </tr>
           <?php }
        ?>
          
        </tbody>
      </table>
      <?php require("components/footer.php") ?>

</body>
</html>
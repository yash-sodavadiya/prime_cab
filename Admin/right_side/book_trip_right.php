<div class="dashboard-top">
            <div class="left">
            <h1>Booking Trips</h1>
            </div>
            <div class="right">
                
            <i class="fa-solid fa-house-chimney-window" style="color: #000000;"></i>
            <span class="home"> <a href="#"> Home </a></span>  <span> > </span> <span>Dashboard</span>
            </div>
        </div>


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
            <th>Accept</th>
            <th>Calcle</th>
          </tr>
        </thead>
        <tbody>
        <?php 
            $sql = "SELECT * FROM tblbook";
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
            <td><button class="<?php if($row['Status'] == "Active" || $row['Status'] == "active"){echo "Done";}else{echo "no";} ?>"><?php echo $row['Status'] ?></button></td>
            <td><form action="php/done.php" method="post"><input type="hidden" name="bid" value="<?php echo $row['Booking_id']; ?>"><button type="submit" name="done" style="background:whitesmoke; border:none; cursor:pointer;"> <img src="../images/main-icons/done.png" alt=""></button></form></td>
            <td><form action="php/done.php" method="post"><input type="hidden" name="bid" value="<?php echo $row['Booking_id']; ?>"><button type="submit" name="no" style="background:whitesmoke; border:none; cursor:pointer;"> <img src="../images/main-icons/no.png" alt=""></button></form></td>

          </tr>
           <?php }
        ?>
          
        </tbody>
      </table>

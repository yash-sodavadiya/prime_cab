<div class="dashboard-top">
            <div class="left">
            <h1>Dashboard</h1>
            </div>
            <div class="right">
                
            <i class="fa-solid fa-house-chimney-window" style="color: #000000;"></i>
            <span class="home"> <a href="Dashboard.php"> Home </a></span>  <span> > </span> <span>Dashboard</span>
            </div>
        </div>


  <div class="row" style="padding-top: 10vh; display:flex; justify-content:space-around">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 my-head">
          <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                        <img src="../images/main-icons/booking.png" alt="">
                  </div>
                  <p class="card-category">Total Booking</p>
                  <h3 class="card-title">
                      <?php  $query = "SELECT Booking_id FROM tblbook"; 
                                      $result = mysqli_query($conn, $query); 
                                       if ($result) 
                        { 
                            // it return number of rows in the table. 
                            $row = mysqli_num_rows($result); 
                              
                            printf(" " . $row); 
                        
                            // close the result. 
                        }  ?>
                  </h3>
              </div>

          </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 my-head">
          <div class="card card-stats" style="background:orange">
              <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                  <img src="../images/main-icons/taxi.png" alt="">
                  </div>
                  <p class="card-category">Total Taxi</p>
                  <h3 class="card-title"> <?php  $query = "SELECT taxi_id FROM tbltaxi"; 
                                      $result = mysqli_query($conn, $query); 
                                       if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                          
                        printf(" " . $row); 
                    
                        // close the result. 
                    } ?></h3>
              </div>

          </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 my-head">
          <div class="card card-stats" style="background: yellowgreen;">
          
              <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                  <img src="../images/main-icons/user.png" alt="">
                  </div>
                  <p class="card-category">Total User</p>
                  <h3 class="card-title"><?php  $query = "SELECT ID FROM user_info"; 
                                      $result = mysqli_query($conn, $query); 
                                       if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                          
                        printf(" " . $row); 
                    
                        // close the result. 
                    } ?></h3>
              </div>

          </div>
      </div>
   
  </div>

  <div class="tbl" style="margin-top:150px">
    <h1>Passanger List</h1>
  <table class="content-table" >
        <thead>
          <tr>
            <th>Passenger Name</th>
            <th>Email Id</th>
            <th>City</th>
            <th>Phone Number</th>
            
          </tr>
        </thead>
        <tbody>
        <?php 
            $sql = "SELECT DISTINCT  * FROM tblbook limit 5";
            $result = mysqli_query($conn,$sql);
            foreach($result as $row)
            {
              
              ?>
                
          <tr>
            <td><?php echo $row['Passenger_name'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['City'] ?></td>
            <td><?php echo $row['Phone_no'] ?></td>
            
            

          </tr>
           <?php }
        ?>
          
        </tbody>
      </table>

  </div>
</div>
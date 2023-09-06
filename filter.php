<?php require("database/config.php") ?>
<?php 

    if($_REQUEST['category'])
    {
        $sql = "SELECT * from `tbltaxi` where category = '".$_REQUEST['category']."' ";
        $resultset = mysqli_query($conn,$sql);
        echo "<table>";
        foreach($resultset as $row)
        {
            echo "<tr>";
             echo "   <td>".  $row['taxi_name']."</td>";
             echo "   <td  >".$row['price_km']."</td>";
              echo "  <td>".$row['base_rate']."</td>";
           echo" </tr>";
        } 
        echo "</table>";
    }
    else{
        echo 0;
    }
?>
<?php require("../database/config.php"); ?>
<?php
    if (isset($_POST['submit'])) {
        $tid = $_POST['tid'];
        $sql = "DELETE FROM tbltaxi where taxi_id = $tid";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            header("location:../view_vehicle.php");
        }
    }
    ?>
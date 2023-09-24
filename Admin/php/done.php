<?php require("../database/config.php") ?>
<?php 
    if(isset($_POST['done']))
    {
        $bid = $_POST['bid'];
        $sql = "UPDATE `tblbook` SET `Status` = 'Active' where `Booking_id` = '$bid' ";
        $result =mysqli_query($conn,$sql);
        if($result)
        {
            header("Location:../trip_book.php");
        }
    }
    if(isset($_POST['no']))
    {
        $bid = $_POST['bid'];
        $sql = "UPDATE `tblbook` SET `Status` = 'Cancle' where `Booking_id` = '$bid' ";
        $result =mysqli_query($conn,$sql);
        if($result)
        {
            header("Location:../trip_book.php");
        }
    }
?>
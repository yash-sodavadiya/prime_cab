<?php
require ("../database/config.php");


if(isset($_POST['submit'])){
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	$sql = "INSERT INTO `user_info`  (`Name`, `email`, `password`) VALUES('$username','$email','$password')";
	$result = mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script>alert("Register Successfully")</script>';
    header("Location:../login.php");
    
    }
	
}

?>
<?php
require ("../database/config.php");

session_start();

function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = $_POST["email"];
	$password = $_POST["password"];
    if($email == "Admin@gmail.com" && $password == "Admin@123")
    {
        $_SESSION["adminname"] = "Admin";
            header("Location:../admin/Dashboard.php");
    }

        $sql = "SELECT * FROM user_info ";
	$result = mysqli_query($conn,$sql);
    foreach($result as $row)
    {
        if ($email === $row['email'] && $password === $row['password'])
        {
            $_SESSION["uname"] = $row['Name'];
            header("Location:../index.php");
        }
        else{
            // header("Location:../login.php");
            function_alert("Password incorrect");
            
        }
    }
    
	
	
}

?>
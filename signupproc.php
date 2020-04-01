<?php 
session_start();
require_once 'connect.php'; 

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $address = $_POST['address'];
 
	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	$r = mysqli_fetch_assoc($result);

	if($count == 1){
		
			header("location: signup.php?msg=5");
		}else{
			//$fmsg = "Invalid Login Credentials";
			$sql1 = "INSERT INTO users (username, email, password, address) VALUES ('$username', '$email', '$password' , '$address')";
			$result1 = mysqli_query($connection, $sql1);
			if($result1){
		
			header("location: login.php?msg=5");
		}
		}
	

?>
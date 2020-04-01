<?php 
require_once 'connect.php';
session_start();
 

	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
	$password = $_POST['pwd'];
    
    $sqlaa = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $resulta = mysqli_query($connection, $sqlaa);
    $counta = mysqli_num_rows($resulta);

	if($email == 'admin@gmail.com' AND $password == 'admin4321'   ){
             header('location: admin/index.php?set=123');
	}
	else {

	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
	$r = mysqli_fetch_assoc($result);

	if($count == 1){
		
			//echo "User exits, create session";
		   
			$_SESSION['user'] = $email;
			$_SESSION['username'] = $r['username'];
			$_SESSION['userid'] = $r['id'];
			$_SESSION['userp'] = $r['password'];
			
			
			header("location: gallery.php");
		}else{
			//$fmsg = "Invalid Login Credentials";
			header("location: login.php?msg=3");
		}
	}

?>
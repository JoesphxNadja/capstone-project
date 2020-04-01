<?php
include '../connect.php';

 
$id = $_GET['id'];
 

$query = "DELETE FROM pics WHERE id='$id'";
$sql = mysqli_query($connection , $query);
if($sql)
{
	header('location: jobs.php');
}

?>
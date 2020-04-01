<?php
include 'conn.php';

 
$id = $_GET['id'];
 

$query = "DELETE FROM jobs WHERE id='$id'";
$sql = mysqli_query($conn, $query);
if($sql)
{
	header('location: jobs.php');
}

?>
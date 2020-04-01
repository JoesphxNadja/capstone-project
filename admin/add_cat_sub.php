<?php
include 'conn.php';

$name = $_POST['name'];
$now = date('Y-m-d H:i:s');

$query = "INSERT into cate (name, date_added) VALUES ('$name', '$now')";
$sql = mysqli_query($conn, $query);
if($sql)
{
	header('location: cat.php');
}

?>
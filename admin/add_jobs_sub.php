<?php
include 'conn.php';

$name = $_POST['title'];
$cate = $_POST['cate'];
$decc = $_POST['desc'];
$type = $_POST['type'];

$now = date('Y-m-d H:i:s');

$query = "INSERT into jobs (title, cate, decc, type,  date_added) VALUES ('$name', '$cate', '$decc', '$type', '$now')";
$sql = mysqli_query($conn, $query);
if($sql)
{
	header('location: jobs.php');
}

?>
<?php
include 'conn.php';

$name = $_POST['name'];
$id = $_POST['id'];
$now = date('Y-m-d H:i:s');

$query = "UPDATE cate SET name='$name', date_added='$now' WHERE id='$id'";
$sql = mysqli_query($conn, $query);
if($sql)
{
	header('location: cat.php');
}

?>
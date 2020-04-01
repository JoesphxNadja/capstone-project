<?php
include 'conn.php';

$title = $_POST['title'];
$cate = $_POST['cate'];
$dcc = $_POST['desc'];
$type = $_POST['type'];
$id = $_POST['id'];
$now = date('Y-m-d H:i:s');

$query = "UPDATE jobs SET title='$title',cate='$cate',decc='$dcc',type='$type' ,date_added='$now' WHERE id='$id'";
$sql = mysqli_query($conn, $query);
if($sql)
{
	header('location: jobs.php');
}

?>
<?php
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['user']);
  unset($_SESSION['username']);
    unset($_SESSION['userp']);
 unset($_SESSION['admin']);
  header('location: index.php');
?>
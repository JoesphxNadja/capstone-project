<?php
  session_start();
 

  include 'header.php';
  include 'nav.php';
?>

<!-- !PAGE CONTENT! -->
 
<?php
if(isset($_GET['set'])){
  $_SESSION['admin'] = 'asd';
}

if($_SESSION['admin']){
$que = "SELECT * FROM users";
$qa = mysqli_query($connection, $que);
$cnt = mysqli_num_rows($qa) - 1;

$ques = "SELECT * FROM pics";
$qas = mysqli_query($connection, $ques);
$cnts = mysqli_num_rows($qas);

?>
  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $cnt; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Users</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $cnts; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Images</h4>
      </div>
    </div>
     
  </div>
<?php } else {
  header('location: ../login.php');
}

 
 
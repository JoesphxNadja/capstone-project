<?php 
session_start();
require_once 'connect.php';
include 'header.php'; ?>

<?php include 'nav.php'; ?>

<?php
  if(isset($_SESSION['userp'])){

     
      $ext =$_POST["search"];
      



$sql="SELECT * from pics where cate like '%$ext%' OR title like '%$ext%' ";
      
      $querys = mysqli_query($connection, $sql);
      if($querys)
      {
        $count = mysqli_num_rows($querys);
        if($count == 0)
        {
        	?>


              <h2>No Result Found <a href="gallery.php">Go Back</a></h4>

        
      
 
        	<?php
        	
        }
      

      else
      {  ?>

        <div class="container">
  <h2>Search Result</h2>
  <p><a href="gallery.php">Click Here To Check All Type Of Images By All Users</a></p>
  



  <?php
              $aa = "SELECT * FROM pics  ";
                           $sqls = mysqli_query($connection, $aa);
                           while($row = mysqli_fetch_assoc($querys))
                           {
                           $username = $row['username'];
                           $title = $row['title'];
                           $img = $row['img'];
                           $id = $row['id'];
 
  ?>
 


 <div class="container-fluid">  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="detail.php?id=<?php echo $id ?>" >
          <img src="<?php echo $img; ?>" class="zoom"  style="width:350px; height: 240px;">
          <div class="caption">
            <p><?php echo $title; ?></p>
            <p>Upload By <?php echo $username; ?></p>
          </div>
        </a>
      </div>
    </div><?php  } ?>
  </div></div>


</body>
</html>

<?php } } ?>
<?php } else {
  header('location: login.php');
} ?>
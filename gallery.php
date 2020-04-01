<?php
  session_start();
  include 'header.php';
  include 'nav.php';
  require_once 'connect.php'; 
?>
<body>
<?php
  if(isset($_SESSION['userp'])){
?>
<div class="container">
  <h2>Image Gallery</h2>
  <p>You are looking all types of images uploaded by all users</p>
  

   <form action="search.php" class="form-inline" method="POST">
                  <div class="form-group">
                    <input type="search" style="padding-right: 40px; " placeholder="search imagess" class="form-control search" name="search">
                    <button class="btn btn-primary" style=" margin: 10px 20px 10px 0; " type="submit">Search <span class="icon icon-search"></span></button>
                    
                   
                  </div>
                </form>


  <?php
  if(isset($_GET['page']))
  {
    $page = $_GET['page'];
  } else {
    $page = "";
  }

  if($page == "" || $page == 1) {
    $page_1 = 0;
  } else {
    $page_1 = ($page * 6) - 6 ; 
  }



   $aac = "SELECT * FROM pics  ";
   $sqlsc = mysqli_query($connection, $aac);
   $sqlsccount = Mysqli_num_rows($sqlsc);
   $count = ceil($sqlsccount / 5);

              $aa = "SELECT * FROM pics LIMIT $page_1 , 6  ";
                           $sqls = mysqli_query($connection, $aa);
                           while($row = mysqli_fetch_assoc($sqls))
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
            <p>Upload By <?php echo $count; ?></p>
          </div>
        </a>
      </div>
    </div><?php  } ?>
  </div></div>
  <hr>
<ul class="pager">
  <?php
    for ($i=1; $i < $count; $i++) { 

      if($i == $page) {
        echo "<li><a class='active_link' href='gallery.php?page={$i}'>{$i}</a></li>";
      }

      else {
         echo "<li><a href='gallery.php?page={$i}'>{$i}</a></li>";
      }

     
    }
  ?>
</ul>

</div>

</body>
</html>
<?php } else {
  header('location: login.php');
} ?>



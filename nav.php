
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="gallery.php">Image Gallery</a>
    </div>
    <ul class="nav navbar-nav">
 
<?php     
      

          if(!isset($_SESSION['username']))
                           { ?>
          <li class=" <?php if($cur_page == 'index.php') { echo 'active';} ?>"><a href="index.php">Main</a></li>
          <?php if($cur_page == 'login.php'){ ?> 
          <li class=" <?php if($cur_page == 'login.php') { echo 'active';} ?>"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
          <?php } if($cur_page == 'signup.php'){ ?> 

          <li class=" <?php if($cur_page == 'signup.php') {echo 'active';} ?>"><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Signup </a></li><?php }?> 
             <?php        }


               else { ?>  
              
        <li class=" <?php if($cur_page == 'gallery.php' || $cur_page == 'search.php' || $cur_page == 'detail.php') {echo 'active';} ?>"><a  href="gallery.php">Gallery</a></li>
        <li class=" <?php if($cur_page == 'upload.php') {echo 'active';} ?>"><a href="upload.php">Upload</a></li>
        <li class=" <?php if($cur_page == 'users.php') {echo 'active';} ?>"><a href="users.php">User Details</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          <?php } ?>
        </ul>
      


      
  </div>
</nav>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/avatar1.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
 
            <a  href="index.php" <?php if($cur_page == 'index.php') { ?> class="w3-bar-item w3-button w3-padding w3-blue" <?php } else { ?>
class="w3-bar-item w3-button w3-padding"
<?php } ?>
              ><i class="fa fa-users fa-fw"></i>Overview</a>
                     
        

 
           <a href="cat.php" <?php if($cur_page == 'cat.php') { ?> class="w3-bar-item w3-button w3-padding w3-blue" <?php } else { ?>
class="w3-bar-item w3-button w3-padding"
<?php } ?>><i class="fa fa-list-alt fa-fw"></i>All Users</a>
 

      <a href="jobs.php" <?php if($cur_page == 'jobs.php') { ?> class="w3-bar-item w3-button w3-padding w3-blue" <?php } else { ?>
class="w3-bar-item w3-button w3-padding"
<?php } ?>><i class="fa fa-list-alt fa-fw"></i>All Images</a>
           

           <a href="../logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-alt fa-fw"></i>Logout</a>

   <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
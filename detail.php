<?php
  session_start();
  include 'header.php';
  require_once 'connect.php'; 
?>
<body>
<?php
include 'nav.php';
$id = $_GET['id'];
?>
<section class="jumbotron jumbotron-fluid" style="height:auto;
padding:5px 0 !important; border-top: 1px solid grey; border-bottom: 1px solid grey; " id="top">
      	<div class="container">
      		<h2 >Image Details</h2>
      		
      	</div>
      </section>
<?php 
 $query = "SELECT * FROM pics WHERE id = '$id'";
 $sql = mysqli_query($connection, $query);
 $row = mysqli_fetch_assoc($sql);
?>

<div style="margin-top: 60px;">
       		<div class="container">
       			<div class="row ml-0 mr-0">
       				<div class="logo col-md-6">

       					<img class="zoom" style="height: 290px; width: 340px;" src="<?php echo $row['img'] ?>">
       					<p  style="padding-top: 7px; font-size: 16px; padding-left: 4px;" ><?php echo $row['title'] ?></p>
       				</div>
       		        <div class="menu-container col-md-6">
       		        	 <h2>Description</h2>
       		        	 <p><?php echo $row['description'] ?> </p>
       		        	 <span style="font-weight: bold;">Category :</span>
       		        	 <span><?php echo $row['cate'] ?></span><br>
       		        	 <span style="font-weight: bold;">Uploaded By :</span>
       		        	 <span><?php echo $row['username'] ?></span><br>
       		        	 <div style="text-align: center; padding-top: 10px; line-height: 80px;">
       		        	 	<a href="gallery.php"  s class="btn btn-sm btn-primary ">Go Back To Gallery</a>
       		        	 </div>
       		        	 
       		        </div>
       			</div>
       		    	
       		</div>
       		
       	</div>
</body>
</html>

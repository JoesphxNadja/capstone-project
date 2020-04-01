
<?php
  session_start();
  include 'header.php';
    require_once 'connect.php'; 
?>
<?php
  if(isset($_SESSION['userp'])){
?>
<?php
  
if(isset($_POST) & !empty($_POST)){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
   $cate = mysqli_real_escape_string($connection, $_POST['cate']);
   $desc =  $_POST['desc'];

 $filename = $_FILES["imagef"]["name"];
 $tempname = $_FILES["imagef"]["tmp_name"];
$folder = "uploads/".$filename;
move_uploaded_file($tempname, $folder);
   
      
$imageFileType = strtolower(pathinfo($folder,PATHINFO_EXTENSION));



    
  $sql = "INSERT INTO pics (title, username,img, ext, description, cate) VALUES ('$title', '$username','$folder', '$imageFileType' , '$desc', '$cate' )";
            $res = mysqli_query($connection, $sql);
            if($res){
              //echo "Product Created";
              header('location: gallery.php');
            }
          else{
            $fmsg = "Failed to Upload Image";
          }

        

} 
  
?>
  <body>
<?php
include 'nav.php';
?>
<div class="container">
  <div class="col-md-9">
    <h2>Upload Image</h2>
  <form action="#" method="POST" enctype="multipart/form-data">

<?php $usern = $_SESSION['username'] ?>
    <div class="form-group">
      <label for="pwd">Username:</label>
      <input type="text" class="form-control"  readonly  name="username" value="<?php echo $usern ?>">
    </div>
    <div class="form-group">
      <label for="email">Image Title:</label>
      <input type="text" required class="form-control" id="email" placeholder="Enter image title" name="title">
    </div>
    

<div class="form-group">
      <label for="email">Image Category:</label>
      <input type="text" required class="form-control" id="email" placeholder="Enter image category" name="cate">
    </div>
    
    
    <div class="form-group">
      <label for="pwd">Upload Image:</label>
      <input type="file" class="form-control" required  name="imagef">
    </div>

    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea class="form-control" required  name="desc" cols="5" rows="5" >
        
      </textarea>
      
    </div>
   
    <button type="submit" class="btn btn-default">Upload</button>
  </form>
  </div>
  
</div>

</body>
</html>
<?php } else {
  header('location: login.php');
} ?>
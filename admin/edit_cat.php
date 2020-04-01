<?php

  include 'header.php';
  include 'nav.php';

  $id = $_GET['id'];

   
                 $query = "SELECT * FROM cate WHERE id='$id'";
                 $sql = mysqli_query($conn, $query);
                 $row = mysqli_fetch_assoc($sql);
                 $name = $row['name'];
                 $id = $row['id'];
?>

	<div class="w3-container" style="text-align: center; padding-top: 22px;">
      <form action="edit_cat_sub.php" method="POST">
  <div class="form-group">
    <label for="email">Edit Category Name</label>
    <input type="text" class="form-control" value="<?php echo $name ?>" name="name">
    <input type="hidden" name="id" value="<?php echo $id ?>">
  </div>
	<div class="form-group">
    
    <input type="submit" class="btn btn-primary" value="Edit">
  </div>
</form>
</div>

	 
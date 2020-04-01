<?php

  include 'header.php';
  include 'nav.php';
?>

	<div class="w3-container" style="text-align: center; padding-top: 22px;">
      <form action="add_jobs_sub.php" method="POST">
        <div style="text-align: center;"><h2>Add Job Details</h2></div>
  <div class="form-group">
    <label for="email">Add Job Title</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="form-group">
    <label for="email">Select Job Category</label>
    <select class="form-control" name="cate" >
      <option>---</option>
      <?php
                 $query = "SELECT * FROM cate";
                 $sql = mysqli_query($conn, $query);
                 while($row = mysqli_fetch_assoc($sql))
                 { 
      ?>
      <option><?php echo $row['name']; ?></option>
    <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="email">Add Job Description</label>
    <textarea class="form-control" name="desc" rows="5" cols="5"></textarea>
    
  </div>
  <div class="form-group">
    <label for="email">Select Job Type</label>
    <select  class="form-control" name="type" >
      <option>---</option>
      <option>Part-time</option>
      <option>Permanent</option>
    </select>
  </div>
	<div class="form-group">
    
    <input type="submit" class="btn btn-primary" value="Add">
  </div>
</form>
</div>

	 
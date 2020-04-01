<?php

  include 'header.php';
  include 'nav.php';
?>

	<div class="w3-container" style="text-align: center; padding-top: 22px;">
      <form action="add_cat_sub.php" method="POST">
  <div class="form-group">
    <label for="email">Add Category Name</label>
    <input type="text" class="form-control" name="name" placeholder="Write Categroy Name Here">
  </div>
	<div class="form-group">
    
    <input type="submit" class="btn btn-primary" value="Add">
  </div>
</form>
</div>

	 
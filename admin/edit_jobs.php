<?php

  include 'header.php';
  include 'nav.php';

  $id = $_GET['id'];

   
                 $query = "SELECT * FROM jobs WHERE id='$id'";
                 $sql = mysqli_query($conn, $query);
                 $row = mysqli_fetch_assoc($sql);
                 $title = $row['title'];
                 $cate = $row['cate'];
                 $decc = $row['decc'];
                 $type = $row['type'];
                 $id = $row['id'];
?>

	<div class="w3-container" style="text-align: center; padding: 22px;">
      <form action="edit_jobs_sub.php" method="POST">
  <div class="form-group">
    <label for="email">Job Title</label>
    <input type="text" class="form-control" value="<?php echo $title ?>" name="title">
    <input type="hidden" name="id" value="<?php echo $id ?>">
  </div>

  <div class="form-group">
    <label for="email">Job Category</label>


    <select class="form-control"  name="cate" >
      <option>---</option> <?php
       $querys = "SELECT * FROM cate";
                 $sqls = mysqli_query($conn, $querys);
                 while($row = mysqli_fetch_assoc($sqls))
                 {  $cates = $row['name']; ?>
   

          <option value="<?php echo $cates ?>"<?php if($cate==$cates) echo 'selected'; ?>><?php echo $cates?></option>
<?php } ?> 
</select>   
    <input type="hidden" name="id" value="<?php echo $id ?>">
  </div>




  <div class="form-group">
    <label for="email">Job Description</label>
    <textarea class="form-control" name="desc" rows="5" cols="5" ><?php echo $decc; ?></textarea>
    
    <input type="hidden" name="id" value="<?php echo $id ?>">
  </div>

  <div class="form-group">
    <label for="email">Job Type</label>
       <select class="form-control"  name="type" >
      <option>---</option> 
       <option  <?php if($type=='Part-time') echo 'selected'; ?>>Part-time</option>
       <option  <?php if($type=='Permanent') echo 'selected'; ?>>Permanent</option>
</select>   
    <input type="hidden" name="id" value="<?php echo $id ?>">
  </div>
	<div class="form-group">
    
    <input type="submit" class="btn btn-primary" value="Edit">
  </div>
</form>
</div>

	 
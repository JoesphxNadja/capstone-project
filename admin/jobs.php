<?php
  session_start();
 

  include 'header.php';
  include 'nav.php';

  $pp = 'admin4321';
 
if(isset($_SESSION['admin'])){
  
 ?>
  <div class="w3-container" style="text-align: center; padding-top:22px">
     
    <h5>All User Details</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Uploaded By</th>
        <th>Description</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
           <?php
                 $query = "SELECT * FROM pics";
                 $sql = mysqli_query($connection, $query);
                 while($row = mysqli_fetch_assoc($sql))
                 {


           ?>

      <tr>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['cate'] ?></td>
        <td>
               <?php echo $row['username'] ?>
          </td>
        <td> 
          
          <textarea readonly="readonly" cols="10" rows="5" class="form-control"><?php echo $row['description'] ?></textarea>
        </td>

        <td>
          <img src="../<?php echo $row['img'] ?>" style="height: 150px; width: 200px;">
        </td>
        <td>
         <a onclick='return checkdelete()'  href="del_cats.php?id=<?php echo $row['id'] ?>">Delete</a></td>
      </tr><script type="text/javascript">
      function checkdelete()
      {
        return confirm('Are you sure, you want to delete this category');
      }
    </script>
      <?php } ?>
    </table><br>
   
  </div>

</div>
  <br>

<?php } else {
  header('location: ../login.php');
}

 
 
<?php
  session_start();
  if ( isset($_GET['session']))
{
     $about_cbr = 'About CBR Page Login';
     $_SESSION['jobs_applied'] = $about_cbr;
     unset($_SESSION['index']);
     unset($_SESSION['cat']);
     unset($_SESSION['jobs']);

}

  include 'header.php';
  include 'nav.php';
?>

	<div class="w3-container" style="text-align: center; padding-top:22px">
 
    <h5>Jobs Applied</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <th>Job Title</th>
        <th>Job Category</th>
        <th>Job Type</th>
        <th>Applied By</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>City</th>
        <th>State</th>
        <th>Allowed To Work In Ireland?</th>
        <th>CV</th>
      </tr>
           <?php
                 $query = "SELECT * FROM job_applied";
                 $sql = mysqli_query($conn, $query);
                 while($row = mysqli_fetch_assoc($sql))
                 {


           ?>

      <tr>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['cate'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['firstname'].' '.$row['lastname'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['address1'].' '.$row['address2']?></td>
         
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['state'] ?></td>
        <td><?php echo $row['go'] ?></td>
        <td><a href="<?php echo $row['cv'] ?> " download><?php echo $row['cv'] ?></a></td>
       
       
      <?php } ?>
    </table><br>
   
  </div>

</div>

  <br>


<?php include 'footer.php'; ?>
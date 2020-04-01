<?php
  session_start();
  require_once 'connect.php';
  include 'header.php';
?>
<body>
<?php
include 'nav.php';
?><?php
  if(isset($_SESSION['userp'])){
?>
<div class="container">
  <h2>User Details</h2>
  <form action="loginproc.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" readonly class="form-control" value="<?php echo $_SESSION['user']; ?>"  name="email">
    </div>
     <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" readonly class="form-control" value="<?php echo $_SESSION['username']; ?>"  name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" readonly class="form-control" value="<?php echo $_SESSION['userp']; ?>" id="pwd" placeholder="Enter password" name="pwd">
    </div>
   
 
  </form>
</div>

</body>
</html>
<?php } else {
  header('location: login.php');
} ?>
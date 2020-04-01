<?php
  session_start();
  require_once 'connect.php';
  include 'header.php';
?>
<body>
<?php
include 'nav.php';
?>
<div class="container">
  <div class="row" style="margin-top: 40px; ">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="border: 2px solid pink; padding: 20px;">
       
  <?php if(isset($_GET['msg'])){
                if($_GET['msg'] == 3){
             ?><div class="alert alert-warning" role="alert"> <?php echo "Invalid Login Credentials"; ?> </div>

             <?php } }?>
  <?php if(isset($_GET['msg'])){
                if($_GET['msg'] == 5){
             ?><div class="alert alert-success" role="alert"> <?php echo "Successfully SignUp ! Login Now "; ?> </div>

             <?php } }?>
  <form action="loginproc.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
   <div style="text-align: center;">
    <button  type="submit" class="btn btn-primary btn-lg">Login</button></div>
    <div class="lio" style="text-align: center; padding-top: 10px">
      <span>Not a member? </span><a class="" href="signup.php">SignUp Now</a>
    </div>
  </form>
    </div>
    <div class="col-md-3"></div>
  </div>
  
</div>
</body>
</body>
</html>

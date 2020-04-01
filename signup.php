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
                if($_GET['msg'] == 5){
             ?><div class="alert alert-warning" role="alert"> <?php echo "Email Already Exists! Try New One!"; ?> </div>

             <?php } }?>
  <form action="signupproc.php" method="POST">

     <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" required class="form-control"   placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" required id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Address:</label>
      <textarea class="form-control" required  name="address" cols="5" rows="5" >
        
      </textarea>
      
    </div>
   <div style="text-align: center;">
    <button  type="submit" class="btn btn-primary btn-lg">SignUp</button></div>
    <div class="lio" style="text-align: center; padding-top: 10px">
      <span>Already a member? </span><a class="" href="login.php">Login Now</a>
    </div>
  </form>
    </div>
    <div class="col-md-3"></div>
  </div>
  
</div>
</body>
</body>
</html>

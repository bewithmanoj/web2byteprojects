<?php 
    include('header.php');
    ob_start();
    session_start();

  if ( isset($_SESSION['user'])!="" ) {
      header("Location: header.php");
      exit;
  }
  $error = false;
  
  if( isset($_POST['submit']) ) {  
    
    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    
    $password = trim($_POST['password']);
    // prevent sql injections / clear user invalid inputs
    
    // if there's no error, continue to login
    if (!$error) {
      
      $password = hash('sha256', $password); // password hashing using SHA256
    
      $res=mysql_query("SELECT userName, userPass FROM users WHERE userEmail='$email'");
      $row=mysql_fetch_array($res);
      $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
      
      if( $count == 1 && $row['userPass']==$password ) {
        $_SESSION['user'] = $row['userName'];
        header("Location: home.php");
      } else {
        $errMSG = "Incorrect Credentials, Try again...";
      }
        
    }
    
  }

 ?>

<div class="container">
  
  <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <h2 class="heading">Login</h2>
      <?php 
            if (isset($errMSG)) { ?>
                <div class="alert alert-success pop1" role="alert"><?php echo $errMSG ?></div>
            <?php } ?>
      <form name="" action="" method="post" id="login">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="email" class="form-control" placeholder="Username" required>
          </div>
          <div class="form-group">
           <label>Password</label>
          <input type="text" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
          <input type="submit" name="submit" value="submit" class="btn btn-success form-control">
        </div>
        <div class="form-group">
          <div class="">if you are not register <a href="signup.php">click here</a></div>
        </div>
      </div>
      </form>
  </div>
</div>

</body>
</html>

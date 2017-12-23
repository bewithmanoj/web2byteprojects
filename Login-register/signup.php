<?php 
    include('header.php');
 ?>

<div class="container">
  
  <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <h2 class="heading">Register</h2>
        <?php 
            if(isset($_POST['submit'])) { 

               $username = $_POST['username'];
               $password = md5($_POST['password']);
               $email    = $_POST['email'];
               $phone    = $_POST['phone'];
               $address  = $_POST['address'];

               $query = "INSERT INTO users(userName,userEmail,userPass,userPhone,userAddress) VALUES('$username','$email','$password','$phone','$address')";
               $res = mysql_query($query);
               if ($res) {
                   $msgs = "Register Created Successfully";
               }
               else{
                 $msgf = "User Registration Failed";
               }
            }

        ?>
        <?php 
            if (isset($msgs)) { ?>
                <div class="alert alert-success pop1" role="alert"><?php echo $msgs ?></div>
            <?php } ?>
            
        <?php 
            if (isset($msgf)) { ?>
                <div class="alert alert-danger pop1" role="alert"><?php echo $msgf ?></div>
        <?php } ?>
      <form name="" action="" method="post" id="signup">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
          <div class="form-group">
           <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
           <label>Email</label>
          <input type="text" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group">
           <label>Phone</label>
          <input type="text" name="phone" class="form-control" placeholder="Phone" required>
          </div>
          <div class="form-group">
           <label>Address</label>
           <textarea rows=4"" class="form-control" name="address" placeholder="Address" required></textarea>
          </div>
          <div class="form-group" style="font-size: 14px;">
            Allready register<a href="index.php" class="text-success"> Click here</a> for login
          </div>
          <div class="form-group" style="font-size: 14px;">
            want to see Register Users List<a href="register-userlist.php" class="text-success"> Click here</a> 
          </div>
          
          <div class="form-group">
          <input type="submit" name="submit" value="submit" class="btn btn-success form-control">
        </div>
      </div>
      </form>


  </div>
</div>

</body>
</html>

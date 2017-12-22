<?php 
	include('header.php');

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		// $query = "SELECT * FROM users";
		// $res = mysql_query($query);
		$res = mysql_query("SELECT * FROM users WHERE userId='$id'");
		$row = mysql_fetch_array($res);
	}
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$id = $_POST['id'];

		$query = "UPDATE users SET userName='$username',userPass='$password',userEmail='$email',userPhone='$phone',userAddress='$address' WHERE userId='$id'";
		$result = mysql_query($query) or die("" .mysql_error());
		echo '<meta http-equiv="refresh" content="0; url=register-userlist.php" />';
	}
 ?>
<div class="container">
  
  <div class="row">
   <div class="col-sm-4 col-sm-offset-4">
      <h2 class="heading">Edit</h2>
		<form name="" action="edit.php" method="post" id="signup">
			<input type="hidden" name="id" class="form-control" value="<?php echo $row[0]; ?>">
	        <div class="form-group">
	          <label>Username</label>
	          <input type="text" name="username" class="form-control" value="<?php echo $row['userName']; ?>" required>
	           
	          </div>
	          <div class="form-group">
	           <label>Password</label>
	          <input type="text" name="password" class="form-control" value="<?php echo $row['userPass']; ?>" required>
	          </div>
	          <div class="form-group">
	           <label>Email</label>
	          <input type="text" name="email" class="form-control" value="<?php echo $row['userEmail']; ?>" required>
	          </div>
	          <div class="form-group">
	           <label>Phone</label>
	          <input type="text" name="phone" class="form-control" value="<?php echo $row['userPhone']; ?>" required>
	          </div>
	          <div class="form-group">
	           <label>Address</label>
	           <textarea rows=4"" class="form-control" name="address" value="<?php echo $row['userAddress']; ?>" required><?php echo $row['userAddress']; ?></textarea>
	          </div>
	          
	          <div class="form-group">
	          <input type="submit" name="submit" value="Update" class="btn btn-success form-control">
	        </div>
	      </div>
	      </form>
      </div>
    </div>
</div>

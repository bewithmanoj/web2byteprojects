 <?php
 include('header.php');
 ?>
 <!-- <script type="text/javascript">
    $(document).ready(function(){
      var data1 = $('.username') .val();
      var data2 = $('.password') .val();
        $(".btn-success").click(function(){
          $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: "username=" + data1 + "&password=" + data2,
            success: function(data) {
                //alert(data);
                $('#data1').text(data);
            }
        });
   });
});
</script> -->
<div class="container">
  <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <h2 class="heading">Login</h2>
      <!-- <div id="data1" class="alert alert-success pop1" role="alert"></div> -->
      <form name="" action="submit.php" method="post" id="login">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control username" placeholder="Username" required>
          </div>
          <div class="form-group">
           <label>Password</label>
          <input type="text" name="password" class="form-control password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <a href="signup.php" class="text-success">Click here</a> for Register
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
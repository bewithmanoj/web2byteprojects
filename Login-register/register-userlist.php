<?php 
    include('header.php');
   $query = "SELECT * FROM users";
   $result = mysql_query($query);

   if ($result) {
     $tt = "All Data Fetching from User table";
   }
   else {
    $ttt = "Data Fetching not working";
   }
 ?>

<div class="container">


  <div class="row">
      <div class="col-sm-12">
      <h2 class="heading">Register Users List</h2>
      <table cellpadding="0" cellspacing="0" border="1" width="100%" class="table-bordered table">
            <tr>
              <td><b>Name</b></td>
              <td><b>Email</b></td>
              <td><b>Password</b></td>
              <td><b>Phone</b></td>
              <td><b>Address</b></td>
              <td><b>Add/delet</b></td>
          </tr>
        <?php 
          while($row = mysql_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['userName'] . '</td>';

echo '<td>' . $row['userEmail'] . '</td>';

echo '<td>' . $row['userPass'] . '</td>';

echo '<td>' . $row['userPhone'] . '</td>';

echo '<td>' . $row['userAddress'] . '</td>';

echo '<td align="center"><a href="delete.php?id=' . $row['userId'] . '" class="btn-danger btn">Delete</a> <a href="edit.php?edit=' . $row['userId'] . '"  class="btn-success btn">Edit</a></td>';

echo "</tr>";

}


          // while($row = mysql_fetch_array($result))
          //   {   //Creates a loop to loop through results
          //   echo "<tr><td>" . $row['userName'] . "</td><td>" . $row['userEmail'] . " </td><td>" .          $row['userPass'] . " </td><td>" . $row['userPhone'] . " </td><td>" . $row['userAddress'] . " </td><td>" . $row['userAddress'] . " </td></tr>";  //$row['index'] the index here is a field name
          //   }

          

           // mysql_close();   // Make sure to close out the database connection
         ?>
</table>
  </div>
  <div class="col-sm-12 paddingtop-paddingbottom50 text-center">
    <?php 
        if (isset($tt)) { ?>
            <div class="text-danger"><?php echo $tt ?></div>
        <?php } ?>

           <?php 
        if (isset($ttt)) { ?>
            <div class="text-danger"><?php echo $ttt ?></div>
        <?php } ?>
        <a href="signup.php" class="btn btn-success margin-top50">Back to register</a>
        <a href="#" class="btn btn-default margin-top50">Download Data</a>
  </div>
</div>
</div>
</body>
</html>

<?php 
  include('connect.php');

  if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query = "DELETE from users WHERE userId='$id'";
    $res = mysql_query($query) or die("failed" .mysql_error() );
    echo '<meta http-equiv="refresh" content="0; url=register-userlist.php" />';
  }
?>

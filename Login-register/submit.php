<?php
ob_start();
session_start();
include('connect.php');
$username=$_REQUEST['username'];
$pa= md5($_REQUEST['password']);
$tbl_name="users";
$login=mysql_query("SELECT * FROM $tbl_name WHERE userName='$username' and userPass='$pa'") or die(mysql_error());
$count=mysql_num_rows($login);
$rows=mysql_fetch_array($login);

if ($count==1) {
$_SESSION['userId'] = $rows['id'];
$_SESSION['username'] = $_POST['username'];
   echo "<script>location.href='welcome.php'</script>";
} else {
     echo "<script>location.href='index.php?error=1'</script>";
}
ob_end_flush();
?>
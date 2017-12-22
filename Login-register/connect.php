<?php
	// error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	$DBHOST = 'localhost';
	$DBUSER = 'root';
	$DBPASS = '';
	$DBNAME = 'examplelogin';
	// define('DBHOST', 'localhost');
	// define('DBUSER', 'root');
	// define('DBPASS', '');
	// define('DBNAME', 'lognregister');
	
	$conn = mysql_connect($DBHOST,$DBUSER,$DBPASS);
	$dbcon = mysql_select_db($DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysqli_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
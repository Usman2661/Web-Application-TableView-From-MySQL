<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.

	$DBHOST = "xx";
	$DBUSER = "xx";
	$DBPASS = "xx";
  $DBNAME = "xx";


	$conn = mysql_connect($DBHOST,$DBUSER,$DBPASS);
	$dbcon = mysql_select_db($DBNAME,$conn);

	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}

	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
?>

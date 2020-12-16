<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "t6vY0x7YMmb4aW5c";
 $dbname = "crms";


 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);


 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>

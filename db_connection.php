<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "t6vY0x7YMmb4aW5c";
 $dbname = "crms";


 $mysqli= new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connection failed: %s\n". $conn -> error);


 return $mysqli;
 }

function CloseCon($mysqli)
 {
 $mysqli -> close();
 }

?>

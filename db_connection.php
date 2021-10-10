<?php
 define('DBSERVER','localhost'); //server
 define('DBUSERNAME','root');//username
 define('DBPASSWORD','t6vY0x7YMmb4aW5c'); //password
 define('DBNAME','crms'); //db name
// connect to mysql database
 $db = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);
 //check db fann_get_total_connections
 if($db ==false){
   die("Error: connection error."  .mysqli_connect_error());
 }?>

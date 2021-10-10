<?php include "db_connection.php"?>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "t6vY0x7YMmb4aW5c";
$dbname = "crms";

 $mysqli= new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connection failed: %s\n". $conn -> error);

//$name = $_POST['name'];
$address = $_POST['address'];
$phone_no = $_POST['phone_number'];
$email = $_POST['email'];
//$comments = $_POST['comments'];



$sql = "INSERT INTO contacts('address,phone_number,email') VALUES ('$address,$phone_no,$email')";
  if(!mysqli_query($mysqli,$sql))
  {
    echo 'Not Inserted';
  }
  else{
    echo 'Inserted';
  }
//  header("refresh; url=contacts.php");
 ?>

<?php include_once 'db_connection.php';
if(isset($_POST['submit']))
{
  $Fname = $_POST['Firstname'];
  $Lname = $_POST['Lastname'];
  $Name_of_Business = $_POST['Name of Business'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO user (Fname, Lname, Name_of_Business, email, password) VALUES ('$Fname','$Lname',
  '$Name_of_Business','$email','$password')";
  if (mysli_query($conn,$sql)) {
    echo "You have been registered successfully!";
  }
  else{
    echo "Error:" . $sql . ":-" .mysqli_error($conn);
  }
  mysli_close($conn);
}
?>

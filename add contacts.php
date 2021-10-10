<?php
require_once "db_connection.php";
//require_once "session.php";
include "navbar.php";
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
  $name = trim($_POST['name']);
  $address = trim($_POST['address']);
  $phone_no = trim($_POST['phone_no']);
  $email = trim($_POST['email']);
  $comments =trim($_POST['comments']);
  if($query=$db->prepare("SELECT * FROM contacts WHERE email = ?")){
    $error ='';
    //bind parameters
    $query->bind_param('s',$email);
    $query-> execute();
    //store the results so we can check if the contact exists in the databse.
    $query->store_result();
        if ($query->num_rows > 0){
          $error.= 'This contact already exists!';
        }
        if (empty($error)){
          $insertQuery = $db->prepare("INSERT INTO contacts (name, email,address, phone_no,comments)VALUES (?,?,?,?,?);");
          $insertQuery->bind_param("sssis",$name,$email,$address,$phone_no,$comments);
          $result = $insertQuery->execute();
          if ($result){
            $error.='Contact added!';
          } else{
            $error.='Something went wrong!';
          }
        }
  }
  $query->close();
  $insertQuery->close();
  //close db connection
  mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add contacts</title>
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <form  action="" method="post">
        <div class="form-row">
          <div class="col-lg-7">
            <label><h1>Add contact</h1></label>
          </div>
        </div>
        <div class="form-group">
        <div class="col-lg-7">
          <input type="text" placeholder="name" name="name" class="form-control" value="" required><br>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-7">
          <input type="text" placeholder="address" name="address" class="form-control" value="" required><br>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-7">
          <input type="text" placeholder="phone number" name="phone_no" class="form-control" value="" required><br>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-7">
          <input type="Email" placeholder="email" name="email" class="form-control" value="" required><br>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-7">
          <textarea placeholder="comment"  name= "comments" class="form-control my-3 p-3" rows="8" cols="80" required></textarea><br>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-7">
          <button type="submit" name="submit" value="Add contact"class="btn1 mt-3 mb-5 ">Add contact</button>
        </div>
      </div>
    </form>
  </body>
</html>

<?php
require('db_connection.php');
include "navbar.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//connect to database


//capture field values in variables
$email = $_POST['email'];
$password = $_POST['password'];

//collect DB info for authentication
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
//run query
$query = mysqli_query($db, $sql);

//checking for query result
if( @mysqli_num_rows($query) == 1 ){

session_start();

//array with user data
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

//user is authenticated, create session variables
$_SESSION['email'] = $_POST['email'];
$_SESSION['name'] = $result['name'];
//redirect to home
header('Location: home.php');
return;
}
else{
//user is not authenticated
echo '<div class="alert alert-warning" role="alert">Your email or password
is incorrect</div>';
}


}




4?>
<!doctype html>
<html lang="en" dir="ltr" >
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css\style2.css">

    <title>Sunrose</title>
  </head>
  <body>
    <div class="col-lg-7 px-4 pt-3">
    <form action="" method="post">
      <div class="form-row">
        <div class="col-lg-7">
        <label><h1>Login</h1></label><br>
        <label><h6>Please fill in your credentials to access your account.</h6></label>
        </div>
      </div>
        <div class="form-group">
          <div class="col-lg-7">
            <input type="email" placeholder="Email" name="email" class="form-control" value="">

          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-7">
            <input type="password" placeholder="password" name="password" class="form-control" value="">
          </div>
        </div>
        <div class="form-row">
          <div class="col-lg-7">
            <button type="submit" name='submit'value="Login" class="btn1 mt-3 mb-5">Login</button>
          </div>
        </div>
        <div class="form-row">
          <div class="col-lg-7">
            <a href="#"> Forgot Password</a>
            <p>Don't have an account?<a href="register.php">Register here</a></p>
          </div>
        </div>
      </form>
  </body>
</html>

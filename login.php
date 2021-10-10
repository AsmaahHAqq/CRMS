<?php require_once "db_connection.php";
require_once "session.php";
include "navbar.php";
$error ='';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
  $email =trim($_POST['email']);
  $password =trim($_POST['password']);

  //validate if email is empty
  if (empty($email)){
    $error.='Please enter email.';
  }
  //validate if password is empty
  if(empty($password)){
    $error.= 'Please enter password';
  }
  if (empty($error)){
    if($query=$db->prepare("SELECT * FROM users where EMAIL=?")){
      $query->bind_param('s',$email);
      $query->execute();
      $row = $query->fetch();
      if ($row){
        if (password_verify($password, $row['password'])) {
          $_SESSION['userid'] = $row['id'];
          $_SESSION['user'] =$row;
          //redirect the user to home page
          header("location: home.php");
          exit;
        } else{
          $error.="The password is not valid.";
        }
      }else{
        $error.="No user exists with that email address.";
      }
    } $query-> close();
  }// close connection
  mysqli_close($db);
}?>
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
            <input type="password" placeholder="password"name="password" class="form-control" value="">

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

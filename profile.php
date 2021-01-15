<?php
require_once "session.php";
include "navbar.php";
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['update'])){
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $sql = "UPDATE users WHERE SET name = '?', email= '?'userID='1'";
  $query = mysqli_query($db, $sql);
  return;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="style2.css">
    <title>Profile</title>
  </head>
  <!-- Code snippets taken from Creative Tim dashboard and  modified to suit project needs-->
  <body>
    <div class="content">
    <div class="container-fluid" action='update' method='post'>
      <div class="col-md-4">
          <div class="card card-user">
            <div class="col-lg-5">
               <h1 class="font-weight-light">Welcome</h1>
              <div class="image">
                  <img src="images\sunrose boutique.JPG" alt="thesunroseboutique image"/>
              </div>
              <div class="content">
                  <div class="author">
                       <a href="https://www.instagram.com/thesunroseboutique/">
                        <h4 class="title">Sunrose Instagram<br/></h4> </a>
                  </div>
              </div>
            
          </div>
      </div>
  </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Company </label>
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Sunrose Boutique">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email" name='email'>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name='update'class="btn btn-info btn-fill ">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

    </div>
 </div>
</div>
  </body>
</html>

<?php
require_once "db_connection.php";
require_once "session.php";
include "navbar.php";
 if ($_SERVER["REQUEST_METHOD"] =="POST" && isset($_POST['submit'])){
   $name = trim($_POST['name']);
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   $confirm_password = trim($_POST['confirm_password']);
   $password_hash = password_hash($password, PASSWORD_BCRYPT);
   $business = trim($_POST['business_name']);
   if($query =$db-> prepare("SELECT * FROM users WHERE EMAIL = ?")){
     $error ='';
     //bind parameters (s =string, i=int, b= blob, etc), in our case the username is a string so we use 's'
     $query->bind_param('s',$email);
     $query-> execute();
     //store the results so we can check if the account exists in the databse.
     $query->store_result();
         if ($query->num_rows > 0){
           $error.= 'The email address is already registered!';
         } else{
           //validate password
           if (strlen($password) < 6){
             $error.='Password must have atleast 6 characters.';
           }
           // validate confirm password
           if (empty($confirm_password)){
             $error.= "please enter confirm password.";
           } else{
             if (empty($error) && ($password != $confirm_password)){
               $error.='passwords did not match';
             }
           }
           if (empty($error)){
             $insertQuery = $db->prepare("INSERT INTO users (NAME,EMAIL, PASSWORD, BUSINESS)VALUES (?,?,?,?);");
             $insertQuery->bind_param("ssss",$name,$email,$password_hash,$business);
             $result = $insertQuery->execute();
             if ($result){
               $error.='Your registration was successful!';
             } else{
               $error.='Something went wrong!';
             }
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
     <title>Registration</title>
     <link rel="stylesheet" href="css/style2.css">
   </head>
   <body>
     <div class="col-lg-7 px-4 pt-3 ">
       <form action="" method="post">
        <!-- <?php echo $success; ?>
         <?php echo $error ?> -->
         <div class="form-row">
           <div class="col-lg-7">
           <label><h1>Register</h1></label><br>
           <label><h6>Please fill out the form below to creat an account.</h6></label></label>
           </div>
         </div>
         <div class="form-group">
           <div class="col-lg-7">
             <input type="text" placeholder="Name" name="name" class="form-control" required>
           </div>
         </div>
           <div class="form-group">
             <div class="col-lg-7">
               <input type="email" placeholder="Email" name="email" class="form-control" required>
             </div>
           </div>
           <div class="form-group">
             <div class="col-lg-7">
               <input type="password" placeholder="password"name="password" class="form-control" required>
             </div>
           </div>
           <div class="form-group">
             <div class="col-lg-7">
               <input type="password" placeholder="confirm password"name="confirm_password" class="form-control" required>
             </div>
           </div>
           <div class="form-group">
             <div class="col-lg-7">
               <input type="text" placeholder="Business Name"name="business_name" class="form-control" required>
             </div>
           </div>
           <div class="form-row">
             <div class="col-lg-7">
               <button type="submit" name="submit" class="btn1 mt-3 mb-5">Register</button>
             </div>
           </div>
           <div class="form-row">
             <div class="col-lg-7">
               <a href="#"> Forgot Password</a>
               <p>Already have an account?<a href="login.php">Log in here</a></p>
             </div>
           </div>
         </form>
     </div>
   </body>
 </html>

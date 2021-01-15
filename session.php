<?php
// start session
session_start();
if(!isset($_SESSION['email'])){
  //redirect to login
  header('Location: login.php');
  return;
}
//if user is already logged in then redirect user to home page
//if(isset($_SESSION["name"]) && $_SESSION["email"] == true) {
//  header("location:home.php");
//  exit;}
 ?>

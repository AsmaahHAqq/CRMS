<?php
// start session
session_start();

//if user is already logged in then redirect user to home page
if(isset($_SESSION["userid"]) && $_SESSION["userid"] == true) {
  header("location:home.php");
  exit;
} ?>

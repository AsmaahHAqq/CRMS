<?php
include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <form action="mailto:asmaah.abdul-haqq@study.beds.ac.uk" method="post" enctype="text/plain">
      <div class="form-row">
        <div class="col-lg-7">
        <label><h1>Contact Us</h1></label>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-7">
          <input type="text" placeholder="Name" class="form-control my-3 p-3" onfocus="this.value" value="" required ="required">
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-7">
          <input type="email" placeholder="Email" class="form-control my-3 p-3" onfocus="this.value" value="" required ="required">
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-7">
          <textarea placeholder="Your message" class="form-control my-3 p-3" rows="8" cols="80" onfocus="this.value" value="" required ="required"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-7">
          <button type="submit" class="btn1 mt-3 mb-5 ">Contact Us</button>
        </div>
      </div>
    </form>
  </body>
</html>

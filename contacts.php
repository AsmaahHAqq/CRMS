
<?php
require_once "session.php";
include 'navbar.php';
//include 'search.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container mt-2">
  <div class="page-header">
  <h2>Contacts List</h2>
  </div>
  <div class="row">
  <div class="col-md-8">
  <table class="table">
  <thead>
  <tr>
  <th scope="col">Name</th>
  <th scope="col">Email</th>
  <th scope="col">Address</th>
  <th>
  <a href="add contacts.php"><button class="btn1">Add Contacts</button></a>
  </th>
  <th><form class="" action="export.php" method="post">
    <input type="submit" name="exportcontacts" class="btn1 btn-success"value="Export as XLS">
  </form></th>
  <th><form class="" action="export2.php" method="post">
    <input type="submit" name="exportcontacts" class="btn1 btn-success"value="Export as PDF">
  </form></th>
  </tr>
  </thead>
  <tbody>
    <?php $conn = mysqli_connect("localhost", "root", "t6vY0x7YMmb4aW5c", "crms");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT name,email, address FROM contacts";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
    . $row["address"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close(); ?>
  </tbody>
</body>
</html>

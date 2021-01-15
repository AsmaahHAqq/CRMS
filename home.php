<?php //require_once 'db_connection.php';
require_once 'session.php';
include 'navbar.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="container mt-2">
       <div class="page-header">
       <h2>Reports</h2>
       </div>
       <div class="row">
       <div class="col-md-8">
       <table class="table">
       <thead>
       <tr>
       <th scope="col">Report ID</th>
       <th scope="col">Date</th>
       <th scope="col">Clicks</th>
       <th scope="col">Views</th>
       <th scope="col"> Monthly Sales</th>
       <th scope="col"> Yearly Sales</th>
       <th><form class="" action="reportexport.php" method="post">
         <input type="submit" name="exportreports" class="btn1 btn-success"value="Export as PDF">
       </form></th>
       </tr>
       </thead>
       <tbody>
         <?php $conn = mysqli_connect("localhost", "root", "t6vY0x7YMmb4aW5c", "crms");
         // Check connection
         if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         }
         $sql = "SELECT reportID,report_date,website_clicks,website_views,monthly_sales,year_sales FROM reports";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["reportID"]. "</td><td>" . $row["report_date"] . "</td><td>" . $row["website_clicks"] . "</td><td>"
         . $row["website_views"]. "</td><td>" . $row["monthly_sales"]. "</td><td>" . $row["year_sales"] . "</td></tr>";
         }
         echo "</table>";
         } else { echo "0 results"; }
         $conn->close(); ?>
       </tbody>
   </body>
 </html>

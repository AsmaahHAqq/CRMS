<?php
//connect to debug
require "db_connection.php";
//declare output variable
$output ='';

//check if export contacts has been posted

if(isset($_POST['exportreports'])){
  $exportsql = "SELECT * FROM reports";
  $exportquery = mysqli_query($db,$exportsql);

  //check if data available to exportcontacts
  if(mysqli_num_rows($exportquery)>0){
    //add to output
    $output.='
    <table class="table" bordered="1">
    <tr>
    <th>
    Report ID
    </th>
    <th>Date
    </th>
    <th>Website Clicks
    </th>
    <th> website Views
    </th>
    <th>Monthly Sales
    </th>
    <th>Yearly Sales
    </th>
    </tr>';

    //loop each database results
    while($result =mysqli_fetch_array($exportquery)){
      $output.='
      <tr>
      <td>'
      .$result["reportID"].'
      </td>
      <td>'
      .$result["report_date"].'
      </td>
      <td>'
      .$result["website_clicks"].'
      </td>
      <td>'
      .$result["website_views"].'
      </td>
      <td>'
      .$result["monthly_sales"].'
      </td>
      <td>.'
      .$result["year_sales"].'
      </td>
      </tr>';
    }
    $output.= '</table>';
    //export data to excel in pdf file
    header('Content-Type:PDF');
    header('Content-Disposition:attachment;
    filename= "report.pdf"');
    echo $output;
  }
}








?>

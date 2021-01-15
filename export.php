<?php
//connect to debug
require "db_connection.php";
//declare output variable
$output ='';

//check if export contacts has been posted

if(isset($_POST['exportcontacts'])){
  $exportsql = "SELECT * FROM contacts";
  $exportquery = mysqli_query($db,$exportsql);

  //check if data available to exportcontacts
  if(mysqli_num_rows($exportquery)>0){
    //add to output
    $output.='
    <table class="table" bordered="1">
    <tr>
    <th>
    contactID
    </th>
    <th>Name
    </th>
    <th>Address
    </th>
    <th>Phone Number
    </th>
    <th>Email
    </th>
    <th>Comments
    </th>
    </tr>';

    //loop each database results
    while($result =mysqli_fetch_array($exportquery)){
      $output.='
      <tr>
      <td>'
      .$result["contactID"].'
      </td>
      <td>'
      .$result["name"].'
      </td>
      <td>'
      .$result["address"].'
      </td>
      <td>'
      .$result["phone_no"].'
      </td>
      <td>'
      .$result["email"].'
      </td>
      <td>.'
      .$result["comments"].'
      </td>
      </tr>';
    }
    $output.= '</table>';
    //export data to excel in xls file
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;
    filename=contacts.xls');
    echo $output;
  }
}








?>

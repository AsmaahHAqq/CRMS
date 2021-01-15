<!--<section>
<!--Search-
    <form class="" method="post" action="product.php">
        <div class="form-row my-3 justify-content-center">
            <input class="form-control col-sm-8" type="search" name="prod-search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success mx-2" type="submit">Search</button>
        </div>
    </form>
</section> -->


<?php
require "db_connection.php";
//retrive the selected results from the database and disply them on the page
   //if the search value has been posted and if the search is not empty
   if (isset($_POST['search']) && $_POST['search']!==''){
        //Capture search value in a variable
       $searchval = $_POST['search'];

       //SQL Statement

       $searchsql = "SELECT * FROM contacts WHERE name LIKE '%$searchval%'  OR address LIKE '%$searchval%' OR comments LIKE '%$searchval%'";

       $searchquery = mysqli_query($db, $searchsql);

       //if no results found
       if (mysqli_num_rows($searchquery) == 0)
       {
           echo '<div class="alert alert-primary" role="alert"> No results found for '.$searchval.'</div>';
       }
       //if results are found
       else {
           //create a loop for results
           while ($result = mysqli_fetch_array($searchquery, MYSQLI_ASSOC))
           {
               // create variables for all items
               $contactID = $result['id'];
               $name = $result['name'];
               $address = $result['address'];
               $comments = $result['comments'];
               $phone_no = $result['phone_no'];

             //display the search results
 ?>
<?php  } // close loop
   } //close else
}// close if
else
{
  //full contacts listing
  //run query on contacts
  $contactssql = "SELECT * FROM contacts WHERE name LIKE '%$searchval%'  OR address LIKE '%$searchval%' OR comments LIKE '%$searchval%'";
  $contactquery = mysqli_query($db,$contactssql);

  //if query runs successfully
  if($contactquery)
  {
    //loop query results to cycle each item record
    while ($record =mysqli_fetch_array($contactquery,MYSQLI_ASSOC)) {
      // CREATE VARIABLES FOR EACH DATAFIELD IN CONTACTS table
      $contactID = $record['id'];
      $name = $record['name'];
      $address = $record['address'];
      $comments = $record['comments'];
      $phone_no = $record['phone_no'];
      ?>
<?php
    }
  }
}
?>

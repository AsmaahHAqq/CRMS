
<?php include 'navbar.php'; ?>
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
<th scope="col">Address</th>
<th scope="col">Email</th>
<th scope="col">Action</th>
<th>
<a href="add contacts.php"><button class="btn1">Add Contacts</button></a>
</th>
</tr>
</thead>
<tbody>
<?php
include 'db_connection.php';
function test(){
  $query ="SELECT * from contacts limit 200"; // Fetch all the data from the table customers
  $result = mysqli_query($mysqli,$query);

}

?>
<?php
if ($result -> num_rows > 0):
while($array=mysqli_fetch_row($result)):?>
<tr>
<th scope="row"><?php echo $array[0];?></th>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[3];?></td>
<td>
<a href="javascript:void(0)" class="btn btn-primary view" data-id="<?php echo $array[0];?>">View</a>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<!--<td colspan="3" rowspan="1" headers="">No Data Found</td> -->
</tr>
<?php endif; ?>
<?php function (){mysqli_free_result($result);}
 ?>
</tbody>
</table>
</div>
<div class="col-md-4">
<span id="name"></span><br>
<span id="address"></span><br>
<span id="email"></span><br>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function($){
$('body').on('click', '.view', function () {
var id = $(this).data('id');
// ajax
$.ajax({
type:"POST",
url: "ajax-fetch-record.php",
data: { id: id },
dataType: 'json',
success: function(res){
$('#name').html(res.name);
$('#address').html(res.address);
$('#email').html(res.email);
}
});
});
});
</script>
</body>
</html>

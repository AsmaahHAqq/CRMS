<?php
include "db_connection.php";
$name = $_POST['name'];
$query="SELECT * from contacts WHERE name = ?";
$result = mysqli_query($mysqli,$query);
$contacts = mysqli_fetch_array($result);
if($contacts) {
echo json_encode($name);
} else {
echo "Error: " . $sql . "" . mysqli_error($mysqli);
}
?>

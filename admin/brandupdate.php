<?php

include "../db.php";

$brand_id = $_POST['brandid'];
$newbrand = $_POST['newbrandname'];

$sql = "UPDATE brand SET brand_name='$newbrand' WHERE id='$brand_id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}



?>
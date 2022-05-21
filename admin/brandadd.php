<?php

  $brand =$_POST['brandname'];

 

include "../db.php";
$sql = "INSERT INTO brand (brand_name) VALUES ('$brand')";



if ($conn->query($sql) === TRUE) {


    header("location: datainput.php");



} else {


    echo "Error: " . $sql . "<br>" . $conn->error;


}

?>
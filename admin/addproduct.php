<?php

$pname =$_POST['productname'];
$mdl   =$_POST['model'];
$dlprc =$_POST['dealprice'];
$sllprc=$_POST['sellprice'];
$unit  =$_POST['quantity'];


  
 

include "../db.php";
$sql = "INSERT INTO inventory (product_name, model, deal_price, sell_price, quantity) VALUES ('$pname', '$mdl', '$dlprc', '$sllprc', '$unit')";

// var_dump($sql);
// die();

if ($conn->query($sql) === TRUE) {


    header("location: datainput.php");



} else {


    echo "Error: " . $sql . "<br>" . $conn->error;


}

?>
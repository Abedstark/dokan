<?php

include "../db.php";

$product_name = $_POST['productname'];
$model = $_POST['model'];
$deal_price = $_POST['dealprice'];
$sell_price = $_POST['sellprice'];
$quantity = $_POST['quantity'];
$id = $_POST['id'];



$sql = "UPDATE inventory SET product_name='$product_name', model ='$model', deal_price='$deal_price', sell_price='$sell_price', quantity='$quantity' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {

  header("location: datainput.php?songbad=1");
} 
else {
    header("location: datainput.php?songbad=2");
}

?>
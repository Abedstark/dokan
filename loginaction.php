<?php


$pass = $_POST['pass'];
$user = $_POST['username']; 




// die(var_dump($pass));

include 'db.php';


$sql = "SELECT * FROM admin WHERE pass='$pass' AND username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // echo "logged in";

    // 

    // while ($row = $result->fetch_assoc()) {

    //     $id = $row['id'];
       
    // }
  header('location:admin/index.php');

} 
else {

    echo "plz sign up";

}





?>
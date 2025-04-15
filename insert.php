<?php
include 'conn.php';
if(isset($_POST['register'])){
    $username = $_POST['username'];


$query= "INSERT into registration (reg_id,username) VALUES('','$username')";
$run = mysqli_query($conn, $query);
if($run){
echo "inserted success";
}
else{
echo "insert failed";
}
}
?>

<?php
include 'db.php';

$usr = $_POST['username'];

$sql = mysqli_query($conn, "SELECT * FROM login WHERE username='$usr'");

if (mysqli_num_rows($sql)>0){
    echo "User already exists";
}else{
    echo "User available";
}


?>
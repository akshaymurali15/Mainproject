<?php 
include 'db.php';
$delid=$_GET['a_id'];
$id=$_GET['id'];
$resss=mysqli_query($conn,"UPDATE `user-order` SET `deliboy_id`='$delid',`Status`= 'Shipped' WHERE User_Order_id= '$id'");
$edd=mysqli_query($conn,"UPDATE `deliveryboy` SET `Status`= '1' WHERE Login_id ='$delid'");
header("location:dealuseorders.php");
?>
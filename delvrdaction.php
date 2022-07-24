<?php 
include 'db.php';
$isd=$_GET['id'];
$red=mysqli_query($conn,"SELECT `deliboy_id` FROM `user-order` WHERE User_Order_id='$isd'");
$row=mysqli_fetch_array($red);
$delid=$row['deliboy_id'];
$ressll=mysqli_query($conn,"INSERT INTO `order-delivery`(`User_order_id`, `Delivery_boy_id`, `Status`) VALUES ('$isd','$delid','Delivered')");
$up=mysqli_query($conn,"UPDATE `user-order` SET `Status`='Delivered' WHERE User_Order_id='$isd'");
$updttt=mysqli_query($conn,"UPDATE `deliveryboy` SET `Status`='0' WHERE Login_id='$delid'");
header("location:delidash.php");
?>
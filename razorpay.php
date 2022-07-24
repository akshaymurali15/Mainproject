<?php
include 'db.php';

$amount=$_GET['am'];
$order_id=$_GET['bid'];
$cust_id=$_GET['ld'];

$payment_update=mysqli_query($conn,"INSERT INTO `payment`(`cust_id`, `order_id`, `paid_amount`, `pay_status`) VALUES ('$cust_id','$order_id','$amount','paid')");
if($payment_update){
    $pay_stat=1;
}
header("Location:userordhistory.php?paystat=$pay_stat");
?>